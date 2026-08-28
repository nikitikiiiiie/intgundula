#!/usr/bin/env python3
"""One-time migration: old lang_de.php/lang_en.php content (extracted to
content_extracted.json) -> per-project JSON files for the Astro site.

Rewrites legacy paths and windows-1252 numeric entities. Re-runnable."""
import json, os, re

HERE = os.path.dirname(os.path.abspath(__file__))
ROOT = os.path.dirname(HERE)
SRC = os.path.join(ROOT, "..", "_reference", "content_extracted.json")

PAGES = ["home", "mels", "zebra", "mama", "king", "werdenberg", "vilnius",
         "vampires", "simulant", "trimaginaziun", "usche_ditg", "cresta",
         "picknick", "gschichtechischte", "rgdc17", "tramjam", "superalgo"]

# windows-1252 codepoints wrongly used as numeric character references
CP1252 = {
    "&#133;": "…", "&#145;": "‘", "&#146;": "’",
    "&#147;": "“", "&#148;": "”", "&#150;": "–",
    "&#151;": "—",
}

def clean(html, lang):
    for k, v in CP1252.items():
        html = html.replace(k, v)
    html = html.replace("http://www.http://www.", "http://www.")
    html = html.replace("../img/", "/img/").replace("../pdf/", "/pdf/")
    html = re.sub(r"(?:\.\./stage/)?content\.php\?artistic=home",
                  f"/{lang}/", html)
    html = re.sub(r"(?:\.\./stage/)?content\.php\?artistic=(\w+)",
                  rf"/{lang}/\1/", html)
    # old spacer-arrow images before links -> css handles arrows now
    html = html.replace("<img src='/img/pfeil_re.gif' width='10' height='10' border='0'>",
                        "<span class='pfeil'></span>")
    return html.strip()

data = json.load(open(SRC, encoding="utf-8"))
written = []
for lang in ["de", "en"]:
    outdir = os.path.join(ROOT, "src", "content", lang)
    os.makedirs(outdir, exist_ok=True)
    src_lang = data[lang]
    for slug in PAGES:
        # english content only exists for pre-2008 projects; fall back to german
        use, fellback = (lang, False)
        if slug + "_title" not in src_lang:
            use, fellback = ("de", True)
        d = data[use]
        entry = {
            "title": clean(d.get(slug + "_title", ""), lang),
            "pix": clean(d.get(slug + "_pix1", ""), lang),
            "txt": clean(d.get(slug + "_txt1", ""), lang),
        }
        if fellback:
            entry["fallback"] = "de"
        path = os.path.join(outdir, f"{slug}.json")
        json.dump(entry, open(path, "w", encoding="utf-8"),
                  ensure_ascii=False, indent=2)
        written.append(f"{lang}/{slug}.json" + (" (de-fallback)" if fellback else ""))

print("\n".join(written))
print(f"\n{len(written)} files written")
