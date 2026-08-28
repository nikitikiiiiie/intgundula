#!/usr/bin/env python3
"""English translations for the EN content files.

Translated 2026-08-28 from the German originals (Claude, draft for Niki's
review - files carry "translationDraft": true). Artwork titles stay in
their original language; pix fields (images) are taken from the German
files. trimaginaziun.json and existing English parts are left untouched."""
import json, os

HERE = os.path.dirname(os.path.abspath(__file__))
ROOT = os.path.dirname(HERE)

T = {
    "home": {
        "title": "<br>Interfacialist for Art and Technology",
        "txt": "<span class='fett'>int.gundula creates applied and artistic design works with new media technologies.</span><br><br>\nCurrently in progress: <strong><a class='txt' href='/en/mels/'>«Seltene Auswüchse»</a></strong>, light and sound installation, Kultursommer Mels SG; \n<strong>«rhein^sein»</strong>, competition project for an artistic intervention, conversion of the Heerbrugg cantonal school;\n<strong><a class='txt' href='/en/zebra/'>«Zebra träumt»</a></strong>, short video for «Memory Sphere» by Antonia Brand, Bäckeranlage, Zurich; \n<strong>Ongoing collaboration</strong> on the 2010 programme at Werdenberg Castle (<a class='txt' href='http://iow.schloss-werdenberg.ch' target='_blank'>Internationale Opernwerkstatt</a> & <a class='txt' href='http://forum.schloss-werdenberg.ch' target='_blank'>Forum Werdenberg</a>); \n<strong>«pola paraSITE»</strong>, rhizomatic marketing for the revived Polaroid film, for The Impossible Project Vienna;\n<strong>«Wider die fiese Selbermach-Suggestion»</strong>, development of a workshop series for teenagers, promoting contemporary art forms and media literacy in the Südkultur region",
    },
    "mels": {
        "txt": "Light and sound sculpture, Kultursommer Mels SG, <br>1 May - 1 October 2010<br><br>\nA dialogue between grapevines and a deciduous tree. <span class='pfeil'></span><a class='txt' href='/pdf/seltene_auswuechse.pdf' target='_blank'>Plus...</a><br>\n<br><span class='pfeil'></span><a class='txt' href='http://www.kultursommermels.ch' target='_blank'>Kultursommer Mels - Denkpause</a>",
    },
    "zebra": {
        "txt": "Short video for <a class='txt' href='http://www.memorysphere.ch' target='_blank'>«Memory Sphere» by Antonia Brand</a>, with Fadri Kreis, from summer 2010 in the Bäckeranlage, Zurich<br><br>\nFree interpretation of a story: «I often go to the zebra sculptures in the Bäcki with my daughter. She loves riding those zebras. There are always lots of children around - that's why the zebras' backs are so nicely polished. Sometimes I even climb onto one of the zebras myself and ride around. You can really imagine what it would be like to ride through the prairie.»",
    },
    "mama": {
        "txt": "«Installations on feelings of home and Rhine Valley longings», with Pipilotti Rist, 15 August - 31 October 2009<br><br>\nOn a joint visit to our Werdenberg home region we revisit real and dreamed-up sceneries of our childhood and youth, reflecting on the longings of the Rhine Valley soul. <span class='pfeil'></span><a class='txt' href='/pdf/neutechnisches_getier.pdf' target='_blank'>Plus...</a><br>\n<br><span class='pfeil'></span><a class='txt' href='http://www.schloss-werdenberg.ch/wp/?page_id=22' target='_blank'>Kunst- und Kulturbauplatz Schloss Werdenberg</a>\n<br><span class='pfeil'></span><a class='txt' href='http://www.schloss-werdenberg.ch/wp/?page_id=514' target='_blank'>Press review</a>",
    },
    "king": {
        "txt": "Designers' Saturday, Langenthal, with Felix Rutishauser, 08/09.11.2008<br><br>\nThe jointly staged product range of AAK (joinery, Wattwil/Ulisbach) and ims (lighting concepts, Winterthur) around wood, sound and light tells of a Swiss wrestling festival on the Schwägalp which, after multiple digital and analogue processes of transformation, appears in unfamiliar form and connects tradition with modern technology. <span class='pfeil'></span><a class='txt' href='/pdf/kingspanorama.pdf' target='_blank'>Plus...</a><br>\n<br><span class='pfeil'></span>Links: <a class='txt' href='http://www.designerssaturday.ch' target='_blank'>D'S</a>, <a class='txt' href='http://www.aak-ideen.ch' target='_blank'>www.aak-ideen.ch</a>, <a class='txt' href='http://www.ims-ag.ch' target='_blank'>www.ims-ag.ch</a>",
    },
    "werdenberg": {
        "txt": "Collaboration on «Schloss in Bewegung» (castle in motion), the new cultural concept for Werdenberg Castle, and launch/production of the project competition «Vorboten», ongoing 2008<br> \n<br>Commissioned by: Office for Culture St. Gallen, Verein Südkultur<br>\n<br>\n<span class='pfeil'></span><a class='txt' href='http://www.schloss-werdenberg.ch' target='_blank'>Website of the Schloss Werdenberg association</a><br>\n<span class='pfeil'></span><a class='txt' href='http://www.schloss-werdenberg.ch/wp/wp-content/uploads/2009/01/schloss_buch_080418_web.pdf' target='_blank'>Concept «Schloss in Bewegung»</a><br>\n<span class='pfeil'></span><a class='txt' href='/pdf/w-und-o_081021.pdf' target='_blank'>«Werdenberger & Obertoggenburger»</a>, 21.10.08<br>\n<span class='pfeil'></span><a class='txt' href='http://www.suedkultur.ch' target='_blank'>Website of the «Südkultur» association</a>",
    },
    "vilnius": {
        "txt": "Urban art intervention for the festival «Art in Unusual Places», part of the programme of Vilnius European Capital of Culture 2009 (Lithuania), 19-21.09.2008<br><br>\nA fictitious campaign announces the reconstruction of Vilnius' medieval city wall. Students demonstrate against this «rebirth of history» and call on the population to take part in shaping public urban life.<br>\n<br><span class='pfeil'></span><a class='txt' href='http://i-paid.biz/wp' target='_blank'>Project website «Historical Vilnius»</a>",
    },
    "vampires": {
        "txt": "Study week on «Experiment Improvisation», Music Department, Zurich University of the Arts, 08-12.09.2008<br><br>\nImprovised live scorings and dance interpretations of Louis Feuillade's silent film series «Les Vampires» (1915). A thirty-strong team of composers, performers, instrumentalists and film performers presents experimental approaches to image, sound and movement. <span class='pfeil'></span><a class='txt' href='/pdf/improvisation_2008.pdf' target='_blank'>Plus...</a>",
    },
    "simulant": {
        "txt": "Prototyping in Romainmôtier, 17-22.06.2008<br><br>\nDORKBOT SWISS summer camp on «working methods in media art practice», supported by Migros Zurich. <span class='pfeil'></span><a class='txt' href='/pdf/atelier_simulant_2008.pdf' target='_blank'>Plus...</a><br><br>\n<span class='pfeil'></span><a class='txt' href='http://www.dorkbotswiss.org' target='_blank'>Website «DORKBOT SWISS»</a><br>\n<span class='pfeil'></span><a class='txt' href='http://www.digitalbrainstorming.ch/multimedia/audio/dorkbot' target='_blank'>Podcast «Digital Brainstorming»</a>",
    },
    "usche_ditg": {
        "title": "<br>«Uschè ditg che jau viv - as long as I live»",
        "txt": "Video player interface and video installation by N.&nbsp;Schawalder, P. Oettli, O. Wolf and D. Vetsch, commissioned by Lia Rumantscha, Chur, from 12.9.2006 until summer 2007 at Park Hotel Waldhaus Flims<br>\n<br>The video installation explores the Rhaeto-Romanic language, its five idioms and the written standard Rumantsch Grischun. At night, the sensual apparatus weaves everything the visitors have explored about Romansh during the day into projections. <span class='pfeil'></span><a class='txt' href='/pdf/projektbeschrieb_uscheditg.pdf' target='_blank'>Plus...</a><br>\n<br><span class='pfeil'></span><a class='txt' href='http://real.xobix.ch/ramgen/rtr/tg/2006/tg_09132006.rm' target='_blank'>«Telesguard Rumantsch»</a>, SF1, 13.09.06<br>\n<img src='/img/spazz.gif' width='10' height='10' border='0'><a class='txt' href='/pdf/suedostschweiz_060914_fine.pdf' target='_blank'>«Südostschweiz»</a>, <a class='txt' href='/pdf/buendnertagblatt_060914_fine.pdf' target='_blank'>«Bündner Tagblatt»</a>, 14.09.06<br>\n<img src='/img/spazz.gif' width='10' height='10' border='0'><a class='txt' href='/pdf/laquotidiana_060915_kl.pdf' target='_blank'>«La Quotidiana»</a>, <a class='txt' href='/pdf/arenaalva_0609151.pdf' target='_blank'>«Arena Alva»</a>, 15.09.06",
    },
    "cresta": {
        "txt": "Interactive video installation in the delight glass cube, Park Hotel Waldhaus, Flims.<br>\nBy Niki Schawalder, Philipp Oettli, Valentina Vuksic and Oliver Wolf, 2005<br>\n<br>Every evening, once the last guests have left the building, the delicate glass wellness cube turns into a stage of light: images of waves, underwater footage from the nearby Lake Cresta and scenes from a shadow theatre tell the story of an enchanted mountain giantess. <span class='pfeil'></span><a class='txt' href='/pdf/projektinfo_crestaunterwasser.pdf' target='_blank'>Plus...</a><br>\n<br><span class='pfeil'></span><a class='txt' href='/pdf/so_cresta_unter_wasser_060418.pdf' target='_blank'>Report «Südostschweiz», 18.04.06</a>",
    },
    "picknick": {
        "txt": "Interactive video installation by Niki Schawalder and Oliver Wolf, 13.05-15.10.2006, <br>\nMuseum Rhein-Schauen, Lustenau (A)<br>\n<br>When the red laser beam of the «Virtual Frontier Emulator» hits the viewer's body, guests approach them - and the viewer becomes a guest, a participant in a gathering around the campfire, stacking stones with children. <br>\n<span class='pfeil'></span><a class='txt' href='/pdf/projektbeschrieb_picknick.pdf' target='_blank'>Plus...</a><br>\n<br><span class='pfeil'></span><a class='txt' href='/pdf/w-und-o_060516.pdf' target='_blank'>«Werdenberger & Obertoggenburger»</a>, 16.05.06<br>\n<img src='/img/spazz.gif' width='10' height='10' border='0'><a class='txt' href='/pdf/liewo_060827.pdf' target='_blank'>«Liechtensteiner Woche»</a>, 27.08.06<br>\n<img src='/img/spazz.gif' width='10' height='10' border='0'><a class='txt' href='/pdf/w-und-o_060915.pdf' target='_blank'>«Werdenberger & Obertoggenburger»</a>, 15.09.06",
    },
    "gschichtechischte": {
        "txt": "Interactive video box by Niki Schawalder, Sven König and Ornella Cacace, 2006<br>\nDachkantine, Toni Molkerei and ZHdK Festival Zurich<br>\n<br>Nightlife guests confide their best stories to the running camera. At the touch of a button, the video system inside the cosy box records solo shows by party animals, philosophical conversations between friends, or theatrical performances without words by fellow artists.",
    },
    "rgdc17": {
        "txt": "Sound and live video performance by Niki Schawalder, Philipp Oettli, Oliver Wolf and David Vetsch, FlimsKlang Festival, Park Hotel Waldhaus Flims, 2006<br>\n<br>Soundscapes on the Rhaeto-Romanic firmament.<br>\nThe audience of this year's FlimsKlang Festival becomes the musical protagonist of the interactive audio-visual installation RG/DC17, creating its own jazzy Rhaeto-Romanic world of sound.\n <span class='pfeil'></span><a class='txt' href='/pdf/rgdc17_flimsklang.pdf' target='_blank'>Plus...</a>",
    },
    "tramjam": {
        "txt": "Networked streaming sound performance by New Media students of the Zurich University of Art and Design, with guest lecturer Shu Lea Cheang and teaching assistant Niki Schawalder, 2004-07 <br>\n<br>Tram timetables set the beat. The open artist group Mumbai Streaming Attack travels to cities where tram lines form the backbone of public transport and plays them with a collectively produced «city sound», mixed from live-generated, mobile-transmitted, collected or composed sounds.<br>\n<span class='pfeil'></span><a class='txt' href='http://tramjam.net' target='_blank'>tramjam.net</a>",
    },
    "superalgo": {
        "txt": "Interactive switchbox installation, diploma project by Niki Schawalder, Binz 39, Zurich, Ars Electronica Festival, Linz, 2003<br>\n<br>A super switchbox charmingly grants access to the inside of a digital system. Unlike the everyday access via mouse and keyboard, non-programmers get the chance to approach the computer's way of thinking through an interface of little lamps and switches, and to write a piece of super software themselves. Through five windows the box offers insight into its logic. The curious may well see the light.<br>\n<span class='pfeil'></span><a class='txt' href='http://www.mamiichwillauchsuperalgorithmen.com' target='_blank'>www.mamiichwillauchsuperalgorithmen.com</a>",
    },
}

for slug, tr in T.items():
    path = os.path.join(ROOT, "src", "content", "en", f"{slug}.json")
    de_path = os.path.join(ROOT, "src", "content", "de", f"{slug}.json")
    de = json.load(open(de_path, encoding="utf-8"))
    entry = {
        "title": tr.get("title", de["title"]),
        "pix": de["pix"],
        "txt": tr["txt"],
        "translationDraft": True,
    }
    json.dump(entry, open(path, "w", encoding="utf-8"),
              ensure_ascii=False, indent=2)
    print("wrote", f"en/{slug}.json")

print(f"\n{len(T)} translations written (trimaginaziun kept as original English)")
