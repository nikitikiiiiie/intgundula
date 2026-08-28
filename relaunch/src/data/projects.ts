// Zeitstrahl-Navigation: Reihenfolge, Quadratfarben und Hover-Labels
// exakt aus den alten GIF-Grafiken (img/nart/*.gif) uebernommen.
export interface Project {
  slug: string;
  color: string;
  label: string;
}

export const PROJECTS: Project[] = [
  { slug: "home", color: "#33FF00", label: "Guten Tag" },
  { slug: "mels", color: "#F77F1E", label: "Seltene Auswüchse" },
  { slug: "zebra", color: "#D66EDC", label: "Zebra träumt" },
  { slug: "mama", color: "#6C5383", label: "Mama nomol" },
  { slug: "king", color: "#A2D700", label: "King's Panorama" },
  { slug: "werdenberg", color: "#FFE400", label: "Schloss Werdenberg" },
  { slug: "vilnius", color: "#51B2DA", label: "Siena - The Wall" },
  { slug: "vampires", color: "#004499", label: "Lange Nacht der Vampire" },
  { slug: "simulant", color: "#008599", label: "Atelier Simulant" },
  { slug: "trimaginaziun", color: "#7A9900", label: "Trimaginaziun" },
  { slug: "usche_ditg", color: "#999900", label: "Uschè ditg che jau viv" },
  { slug: "cresta", color: "#00D7BB", label: "Cresta unter Wasser" },
  { slug: "picknick", color: "#CCF139", label: "Picknick am Wegesrand" },
  { slug: "gschichtechischte", color: "#FFFF00", label: "Gschichte Chischte" },
  { slug: "rgdc17", color: "#FFD800", label: "RG/DC17" },
  { slug: "tramjam", color: "#5BD700", label: "Tramjam" },
  { slug: "superalgo", color: "#0E9177", label: "Super-Algorithmen" },
];

export const LANGS = ["de", "en"] as const;
export type Lang = (typeof LANGS)[number];

export const SITE_TITLE: Record<Lang, string> = {
  de: "int.gundula – Künstlerische und angewandte Gestaltung mit neuen Medientechnologien",
  en: "int.gundula – applied and artistic designs in new media",
};

export const SITE_DESCRIPTION: Record<Lang, string> = {
  de: "int.gundula arbeitet an den Schnittstellen künstlerischer und angewandter Gestaltung mit Neuen Medien",
  en: "int.gundula implements applied and artistic designs in new media",
};

export function urlFor(lang: Lang | string, slug: string): string {
  return slug === "home" ? `/${lang}/` : `/${lang}/${slug}/`;
}

export interface Entry {
  title: string;
  pix: string;
  txt: string;
  fallback?: string;
}

const files = import.meta.glob<{ default: Entry }>("../content/*/*.json", {
  eager: true,
});

export function getEntry(lang: string, slug: string): Entry {
  const mod = files[`../content/${lang}/${slug}.json`];
  if (!mod) throw new Error(`missing content: ${lang}/${slug}`);
  return mod.default;
}
