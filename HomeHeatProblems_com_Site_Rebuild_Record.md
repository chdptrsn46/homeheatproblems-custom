# HomeHeatProblems.com — Site Rebuild Project Record
**Owner:** Chad Peterson
**Site URL:** https://homeheatproblems.com
**Platform:** WordPress, Kadence theme
**Hosting:** WPX Hosting
**Last Updated:** April 24, 2026
**Document Version:** 2.0

---

## CLAUDE'S ROLE ON THIS PROJECT

Claude acts as **Product Manager** for this project. This means:

- Claude audits the live site at the start of every session before giving advice
- Claude maintains this document and flags when it needs updating
- Claude enforces industry standards, best practices, and SEO guidelines
- Claude prioritizes tasks by impact and flags risks before they become problems
- Claude does not just answer questions — Claude proactively identifies issues
- Claude ensures nothing breaks by recommending staging before any significant change
- Claude tracks what has been done, what is pending, and what is at risk

**Every session should begin with:**
1. Chad uploads this file
2. Claude fetches the live site and 2-3 key pages
3. Claude compares live state to this document
4. Claude reports any discrepancies before work begins
5. Work proceeds in priority order from the Known Issues list

---

## HOW TO USE THIS DOCUMENT

- **Save location:** Documents/HomeHeatProblems website/HomeHeatProblems_com_Site_Rebuild_Record.md
- Upload this file at the start of every Claude chat session
- After each session, download the updated version and replace the old one
- Eli should have a copy of this file in the GitHub repository
- Update the status of tasks as they are completed
- Add new issues to Known Issues as they are discovered

---

## About Chad Peterson

- Retired HVAC contractor, 45+ years experience (started 1977)
- Worked for others for first 5 years, then owned mechanical contracting business for 40 years
- Primary business location: **Vancouver, Washington**
- Licensed in both **Washington** and **Oregon**
- Also worked in **Illinois** earlier in career
- Now based in **Prineville, Oregon** (high desert, Central Oregon)
- Son **Eli** helps with technical side — has GitHub experience
- Age 80. Comfortable with WordPress but not a developer. Needs step-by-step instructions.
- Prefers simple, maintainable solutions over complex ones

### Credentials (held during active career — not renewed since retirement)
- EPA 608 Universal Certification
- Oregon LHR30 — Limited Heating, Cooling & Refrigeration Contractor
- Oregon CRE9 — Restricted Energy Contractor
- Licensed Contractor in Washington State
- Grandfathered into early 2000s apprenticeship/electrical certification requirements

### Systems Worked On
- Gas furnaces and forced-air systems (all makes and vintages)
- Heat pumps — air-source and water-source/geothermal (owns 2 geothermal units)
- Ductless mini splits (early-generation through modern inverter systems)
- Central air conditioning, air handlers, zoning systems
- Gas line installation and underground service runs
- Indoor air quality: filtration, ventilation, humidity control
- Commercial and residential (last 20 years: residential only)

---

## Site Overview

- **Revenue model:** Google AdSense + Amazon Associates affiliate program
- **Primary goal:** Grow organic search traffic, earn affiliate revenue
- **Content:** 160 published posts, 7 drafts (as of April 2026)
- **URL structure:** Flat — all posts at /post-slug/ — **DO NOT change any URLs ever**
- **Google indexing confirmed:** April 12, 2026
- **AdSense:** Active — Auto Ads suspected (causing mobile layout issues)
- **Amazon Associates:** Active — some affiliate links in existing articles

### Site History
- Used Ezoic for ads — Ezoic severely damaged the site
- Spent ~2 years rebuilding after Ezoic
- Now using AdSense and Amazon Associates only
- Google confirmed impressions collection April 12, 2026
- Site trajectory is positive — recovering in Google's eyes

---

## Technical Infrastructure

### Hosting — WPX
- Server-level cache (separate from WordPress cache plugins)
- **Always purge WPX cache after any change** — not just WordPress purge button
- WPX offers one-click staging environment — **use staging before any significant code change**
- WPX provides automatic backups — **verify frequency with WPX support (target: daily)**
- WPX support chat available for hosting questions

### WPX Server Connection Details (SFTP)
- **SFTP Host:** m16.wpx.net (or 198.60.193.6)
- **SFTP Port:** 2222 (recommended)
- **FTP Host:** m16.wpx.net
- **FTP Port:** 21
- **Username:** userftp.ftp@homeheatproblems.com
- **Password:** stored securely — do not write here
- **Connect command:** `sftp -P 2222 userftp.ftp@homeheatproblems.com@m16.wpx.net`
- **IMPORTANT:** Never store password in this document or in GitHub

### PowerShell Workflow
- **Connect to server:** `sftp -P 2222 userftp.ftp@homeheatproblems.com@m16.wpx.net`
- **Upload a file:** `put "C:\local\path\file.css" remote/path/file.css`
- **Auto-save to GitHub:** Runs automatically every night at midnight
- **Manual save to GitHub:** type `save-site` in PowerShell

### Installed Plugins
| Plugin | Purpose | Status |
|---|---|---|
| RankMath SEO (free) | SEO, schema markup | Active |
| Kadence / Kadence Blocks | Theme and page builder | Active |
| WPMU DEV | Various tools | Active |
| WP Last Modified Info | Shows last modified dates | Active |
| Site Kit by Google | GA4 and GSC connection | Active |
| HFCM (Header Footer Code Manager) | Header/footer code injection | Active |
| WP-Optimize | Performance optimization | Active |
| Link Checker | Finds broken links | Active |
| UpdraftPlus | **TO BE INSTALLED** — backup to Google Drive | Not installed |

### Connected Services
- Google Search Console ✅
- Google Analytics 4 (via Site Kit) ✅
- Amazon Associates ✅
- Google AdSense ✅

### Where the Code Lives
- **WordPress core, theme, plugins:** On WPX servers — NOT on local computer
- **Database (all content):** On WPX servers — backed up by WPX
- **Media/uploads:** On WPX servers at wp-content/uploads/
- **Custom code (CSS, snippets):** To be stored in GitHub repo (Eli to set up)
- **This document and content drafts:** Local computer — Documents/HomeHeatProblems website/

---

## Protection & Backup Strategy (3-Layer System)

### Layer 1 — WPX Automatic Backups (PRIMARY)
- WPX backs up automatically — verify daily frequency with WPX support
- Can restore entire site from WPX control panel
- **Action needed:** Log into WPX, confirm backup frequency, confirm restore process

### Layer 2 — UpdraftPlus Plugin (SECONDARY)
- Free plugin — backs up to Google Drive
- Install and configure to run weekly
- Backs up: database, themes, plugins, uploads
- **Action needed:** Install UpdraftPlus, connect to Google Drive, schedule weekly backup

### Layer 3 — WPX Staging (PRE-CHANGE SAFETY)
- WPX offers one-click staging environment
- **Rule:** Any CSS change, plugin update, or theme modification goes to staging first
- Test on staging → confirm it works → push to live
- Chad makes content changes directly on live (low risk)
- Eli makes code changes on staging first (required)

### Child Theme — Kadence Child
- **Status:** Active on live site ✅
- **Server location:** /wp-content/themes/kadence-child/
- **Local location:** C:\Users\duh\Documents\HomeHeatProblems website\homeheatproblems-custom\kadence-child\
- **Files:** style.css (custom CSS goes here), functions.php (custom PHP goes here)
- **Rule:** ALL CSS and code customizations go in child theme — never edit Kadence parent theme directly
- **Repository:** https://github.com/chdptrsn46/homeheatproblems-custom.git
- **Owner:** Eli Peterson
- **Store in GitHub:** Custom CSS, code snippets, child theme files, this record file
- **Do NOT store:** Entire WordPress installation, database files, media uploads
- Simple commit message format: `[date] what changed and why`
- Example: `[2026-04-24] Added FTC disclosure to footer via HFCM`

### Change Management Rules
| Type of Change | Process |
|---|---|
| Writing/editing content | Direct on live — low risk |
| Adding/editing images | Direct on live — low risk |
| Plugin settings changes | Direct on live — note in this document |
| New plugin installation | Staging first, then live |
| CSS or theme changes | Staging first, then live, then GitHub |
| Plugin updates | Staging first, then live |
| WordPress core updates | WPX staging first — always |
| URL or permalink changes | Never without full discussion — high SEO risk |

---

## Local Computer File Structure

**Base location:** Documents/HomeHeatProblems website/

```
HomeHeatProblems website/
├── HomeHeatProblems_com_Site_Rebuild_Record.md    (this file)
├── Content/
│   ├── About_Page_Final.md                        (approved About page text)
│   ├── Pillar_Pages/                              (category description drafts)
│   └── Article_Drafts/                            (new articles before publishing)
├── SEO/
│   ├── focus-keywords.md                          (keyword research)
│   └── internal-linking-map.md                    (track which articles link where)
├── Affiliate/
│   ├── product-links.md                           (Amazon product links)
│   └── buying-guide-drafts/                       (Phase 3 article drafts)
├── Design/
│   ├── color-palette.md                           (brand colors and usage)
│   └── logo-files/                                (original logo source files)
├── Legal/
│   ├── policy-fixes-needed.md                     (track bychadpeterson.com fixes)
│   └── ftc-disclosure-text.md                     (approved disclosure language)
└── Backups/
    └── (manual exports if needed)
```

---

## Industry Standards Claude Enforces on This Project

### SEO Standards
- Every article has a focus keyword set in RankMath
- Every article has a custom meta description (not auto-generated)
- Every image has descriptive alt text
- No broken internal or external links (Link Checker plugin monitors this)
- No duplicate content across pages
- Schema markup set on every post (Article, HowTo, or FAQ)
- URL structure never changed once indexed by Google

### Content Standards
- Chad's voice preserved — no corporate or AI-sounding rewrites
- Every article links to its pillar/category page
- Every article links to 2-3 related sibling articles
- 3-5 internal links per article maximum
- No keyword stuffing
- Affiliate disclosure at top of any article with product links

### Legal/Compliance Standards
- FTC disclosure in footer (Amazon Associates requirement)
- Per-post affiliate disclosure on any article with affiliate links
- Privacy Policy references correct domain (homeheatproblems.com only)
- Disclaimer references correct domain
- Amazon Associates operating agreement followed

### Technical Standards
- Test significant changes on WPX staging before pushing live
- Purge WPX cache after every save
- Verify changes in incognito window (not regular browser)
- Never change URLs of published posts
- Always back up before major changes
- Document every code change in GitHub with a clear commit message

### Performance Standards
- Images sized appropriately before upload (not full-size originals)
- Image filenames descriptive and keyword-relevant before upload
- Base64 placeholders to be eliminated
- Page speed monitored via Google PageSpeed Insights periodically

---

## AUDIT FINDINGS — Live Site (April 24, 2026)

### Homepage
- ✅ Navigation correct: Home | Articles | About Chad Peterson
- ✅ Hero section with "since 1977" credential
- ✅ Three topic sections with working article links
- ⚠️ Homepage is still a link list — topic cluster card redesign not done
- ⚠️ Base64 logo placeholder in page source
- ⚠️ No prominent search bar in hero area

### About Page — CRITICAL ISSUE
**The live About page is showing the OLD version.**
Old content: "I'm Chad Peterson, a retired mechanical contractor with more than just a few years of hands-on experience..."
New credentialed version is NOT confirmed live. Full correct text saved in this document below.

Additional About page issues:
- ⚠️ Dead social links (Facebook, X, Instagram → #) in page footer
- ⚠️ Author photo not confirmed live
- ⚠️ Old navigation showing in some cached versions

### Privacy Policy — CRITICAL ISSUE
- ❌ References bychadpeterson.com throughout — wrong domain
- ❌ Contact email is support@bychadpeterson.com — wrong
- ❌ Footer links point to bychadpeterson.com

### Disclaimer — CRITICAL ISSUE
- ❌ Same as Privacy Policy — bychadpeterson.com throughout
- ✅ Amazon Associates disclosure language IS present and adequate

### Blog/Articles Pages
- ✅ Navigation correct
- ✅ Categories displaying correctly
- ⚠️ Base64 placeholders on all images before load
- ⚠️ Many articles missing RankMath focus keywords

---

## Pages on Site

| Page | URL | Status |
|---|---|---|
| Home | / | Live — needs design upgrade |
| Articles | /blog/ | Live — working |
| About Chad Peterson | /about-chad-peterson/ | Live — OLD content showing |
| Privacy Policy | /privacy-policy/ | Live — wrong domain throughout |
| Terms & Conditions | /terms-conditions/ | Live — needs audit |
| Disclaimer | /disclaimer/ | Live — wrong domain throughout |
| Accessibility Statement | /accessibility-statement/ | Live — needs audit |
| Solopreneur Behind the Posts | /solopreneur-behind-the-posts/ | Orphaned — removed from nav |
| Welcome To Home Heat Problems | /welcome-to-home-heat-problems/ | Orphaned — removed from nav |
| What's New at HHP | /home-heat-problems/ | Orphaned — removed from nav |

---

## Categories (15 total)

| Category | Slug | Articles | Description Status |
|---|---|---|---|
| Heat Pumps: Efficient Heating & Cooling for Every Season | heat-pumps | 32 | ✅ Written |
| General HVAC Information | general-hvac-information | 30 | ✅ Exists |
| Mini Splits: Ductless Heating & Cooling Tips | mini-splits | 20 | ✅ Exists |
| A Guide to Home Thermostats | home-thermostats | 16 | ✅ Exists |
| HVAC Basics: How Your Heating & Cooling System Works | hvac-basics | ~4 | ✅ Written |
| Gas Piping | gas-piping | 7 | ✅ Exists |
| Gas Fireplaces | gas-fireplaces | 6 | ✅ Exists |
| Electric Furnaces | electric-furnaces | 6 | ✅ Exists |
| HVAC Maintenance | hvac-maintenance | 5 | ✅ Exists |
| Indoor Air Quality (IAQ) | indoor-air-quality | 5 | ✅ Exists |
| Manufactured Home HVAC | manufactured-home-heating-and-air | 5 | ✅ Exists |
| Gas Furnaces | gas-furnaces | 3 | ✅ Exists |
| Duct Work | duct-work | 4 | ✅ Exists |
| Furnace Air Filters | furnace-air-filters | 3 | ✅ Exists |
| Air Conditioning | air-conditioning | 1 | ⚠️ Thin — 1 article only |

---

## About Page — Final Approved Content
*Authoritative version. Restore this if the page is ever lost or overwritten.*

```
[H2] HVAC Technician | Licensed Contractor | 45+ Years in the Field

[H3] I've been doing this since 1977.

Not reading about it. Not writing software to analyze it. Actually doing it —
crawling into attics in July, troubleshooting furnaces at 2 a.m. in January,
pulling permits, running gas lines, and figuring out why a heat pump that
should work perfectly... doesn't.

I started in the trades in 1977. Over the next four-plus decades, I worked on
residential and commercial HVAC systems primarily out of Vancouver, Washington,
where I ran my business for most of my career. I was licensed in both Washington
and Oregon, and earlier in my career I also worked in Illinois.

In the early years I did it all — commercial rooftop units, light industrial,
multi-family. In the last twenty years of my career, I focused entirely on
residential: the homes where real families live, and where a broken furnace in
February isn't an inconvenience, it's an emergency.

[H3] What I Did for a Living

I spent the first five years of my career working for established contractors,
learning the trade from the ground up. After that, I ran my own mechanical
contracting business for the next 40 years. That meant I wasn't just a
technician — I was also responsible for hiring, licensing, code compliance,
and standing behind my work with my own name on it.

Over the course of my career I worked on:
- Gas furnaces and forced-air systems of every make and vintage
- Heat pumps — both air-source and the quirks that come with them in cold climates
- Ductless mini splits, from early-generation units through modern inverter systems
- Central air conditioning, air handlers, and zoning systems
- Gas line installation and underground service runs
- Indoor air quality: filtration, ventilation, humidity control

If it moved air or burned gas in a home, I've probably worked on it.

[H3] My Licenses and Credentials

I held the following licenses and certifications during my active career:
- EPA 608 Universal Certification — Federal certification required to purchase
  and handle refrigerants
- Oregon LHR30 — Limited Heating, Cooling, and Refrigeration Contractor
  license, State of Oregon
- Oregon CRE9 — Restricted Energy Contractor license, State of Oregon
- Licensed Contractor in Washington State
- Completed all required continuing education throughout my active career

Washington and Oregon both implemented stricter apprenticeship and electrical
certification requirements for HVAC contractors in the early 2000s. I was
grandfathered into those requirements based on my years of documented field
experience — a recognition of time actually spent doing the work, not just
passing a test.

I am now retired and have chosen not to renew these licenses, as I am no
longer taking on clients. I share this background so you understand where
my advice comes from.

[H3] Why I Built This Site

When I retired, I kept getting asked the same kinds of questions by neighbors,
family, and anyone who found out I'd spent my career in HVAC: "My furnace is
making a noise — is that serious?" "Should I replace my thermostat before
winter?" "The salesperson said I need a whole new system. Do I really?"

I built Home Heat Problems to answer those questions honestly, in plain
language, without trying to sell you anything you don't need.

Most HVAC content online is written by people who have never held a manifold
gauge set or diagnosed a heat exchanger crack. It's written to rank on Google,
not to actually help you. I'm not interested in that approach.

Every article on this site comes from real field experience. I know what
actually fails, what's worth fixing, and when it's time to call a professional.
I also know how to explain it to someone who just wants their house to be warm.

[H3] A Little More About Me

I'm based in Prineville, Oregon — high desert country, where winters are cold
and summers are hot, and HVAC systems work hard year-round. My wife and I live
here in retirement, and this site is my way of staying useful.

My son Eli helps me keep the technical side of the site running. The writing
and the opinions are all mine.

If you have a question that isn't covered on the site, use the search bar —
chances are I've written something relevant. I'm not able to diagnose your
specific system remotely, but the articles here will help you understand what
you're dealing with before you call a tech.

Thanks for reading.

— Chad Peterson
Retired HVAC Contractor | Vancouver, Washington & Prineville, Oregon

[Button/Link] Browse all articles →  (links to /blog/)
```

---

## Four Phase Redesign Plan

### Phase 1 — Visual & Structural Foundation
**STATUS: PARTIALLY COMPLETE — CRITICAL ISSUES FOUND**

| Task | Status | Priority |
|---|---|---|
| About page — new content live | ❌ OLD VERSION SHOWING | 🔴 Critical |
| Fix Privacy Policy domain references | ❌ Not done | 🔴 Critical |
| Fix Disclaimer domain references | ❌ Not done | 🔴 Critical |
| FTC disclosure in footer | ❌ Not done | 🔴 Critical |
| Author photo confirmed live on About page | ⚠️ Unconfirmed | 🟡 High |
| Dead social links removed from About page footer | ⚠️ Partial | 🟡 High |
| Navigation cleaned up (Home/Articles/About) | ✅ Done | — |
| Person schema on About page | ✅ Done | — |
| GSC indexing requested | ✅ Done | — |
| HVAC Basics category updated | ✅ Done | — |
| Category article reassignment | ✅ Done | — |
| Install UpdraftPlus backup plugin | ❌ Not done | 🟡 High |
| Verify WPX backup frequency | ❌ Not done | 🟡 High |
| Eli sets up GitHub repo | ✅ Done — github.com/chdptrsn46/homeheatproblems-custom | 🟡 High |
| Mobile logo/photo overlap fix | ❌ Not done | 🟡 High |
| RankMath author schema verified | ❌ Not verified | 🟡 Medium |
| Per-post affiliate disclosure | ❌ Not done | 🟡 Medium |
| Homepage redesign (hero, search, topic cards) | ❌ Not started | 🟢 Planned |
| Color palette implementation | ❌ Not started | 🟢 Planned |
| Logo base64 placeholder fix | ❌ Not started | 🟢 Low |

### Phase 2 — Content Architecture
**STATUS: IN PROGRESS**

| Task | Status | Priority |
|---|---|---|
| Heat Pumps pillar page description | ✅ Done | — |
| Mini Splits pillar page description | ✅ Done | — |
| Category cleanup | ✅ Done | — |
| Internal linking — Heat Pumps | ❌ Not started | 🟡 High |
| Internal linking — Mini Splits | ❌ Not started | 🟡 High |
| Internal linking — all other clusters | ❌ Not started | 🟡 Medium |
| Focus keywords in RankMath | ⚠️ Ongoing — add when editing | — |
| Remaining category descriptions | ❌ Not done | 🟢 Low |

**Internal Linking Rules:**
- 3-5 internal links per article maximum
- Link text describes destination — never "click here"
- One link back to category/pillar page per article
- 2-3 links to sibling articles in same cluster
- Always set focus keyword in RankMath when editing any article

### Phase 3 — Affiliate Revenue
**STATUS: NOT STARTED**

Target buying guide articles:
- "best mini split for garage"
- "best thermostat for heat pump"
- "best furnace filter for allergies"
- "best mini split for cold climate"
- "best programmable thermostat for electric baseboard heat"

Tasks:
- Build Kadence product card block pattern
- Build comparison table pattern
- Write 5-10 buying guide articles
- Install AAWP or Lasso for live Amazon product data
- Add FTC footer disclosure
- Add per-post affiliate disclosure

### Phase 4 — Ongoing Content Standards
**Every new article Chad writes must have:**
- Target keyword in title and H1
- Custom meta description
- Internal links to 2+ articles and pillar page
- Image alt text on every image
- RankMath schema type set
- Affiliate disclosure if any products mentioned

---

## Known Issues (Active — Prioritized)

### 🔴 CRITICAL

**1. About Page Showing Old Content**
Live page shows old short bio. New version not confirmed live.
Fix: Open in WordPress editor → confirm new content → save → purge WPX cache
Content backup: See About Page Final Content section above

**2. Privacy Policy — Wrong Domain (bychadpeterson.com)**
Entire policy references wrong domain and wrong contact email.
Fix: Edit Privacy Policy → find/replace all bychadpeterson.com → save

**3. Disclaimer — Wrong Domain (bychadpeterson.com)**
Same issue as Privacy Policy.
Fix: Edit Disclaimer → find/replace all bychadpeterson.com → save

**4. FTC Affiliate Disclosure Missing from Footer**
Required by Amazon Associates operating agreement.
Fix text: "This site contains affiliate links. As an Amazon Associate I earn from qualifying purchases."
Fix location: Appearance → Widgets → Footer, or HFCM footer injection

### 🟡 HIGH

**5. Mobile Logo/Photo Overlap**
Logo overlaps author photo on mobile screens.
Fix: About page editor → click photo → set max-width to 800px
Also: Check AdSense Auto Ads settings — ad appearing over content on mobile

**6. Dead Social Links in About Page Footer**
Facebook, X, Instagram pointing to # on About page.
Fix: Appearance → Widgets or Kadence footer settings → remove social icons

**7. No UpdraftPlus Backup Installed**
Site has no secondary backup outside WPX.
Fix: Install UpdraftPlus free → connect Google Drive → schedule weekly backup

**8. WPX Backup Frequency Unverified**
Don't know if WPX backs up daily or less often.
Fix: Chat with WPX support and confirm — target is daily backups

**9. GitHub Repository — ✅ DONE**
Repository live at: https://github.com/chdptrsn46/homeheatproblems-custom.git
Next step: Eli adds this record file and any existing custom CSS to the repo

### 🟢 LOW

**10. Small "About Chad Peterson" Title**
Kadence auto-displays page title in small text.
Fix: About page editor → Kadence Settings → toggle Title off

**11. Orphaned Pages**
Three pages exist but are removed from navigation:
- /solopreneur-behind-the-posts/
- /welcome-to-home-heat-problems/
- /home-heat-problems/
Decision needed: Delete or redirect these pages

**12. Base64 Logo Placeholder**
Logo loads via base64 before real image.
Fix: Replace in Kadence customizer with proper image load

---

## SEO Configuration

### RankMath Status
| Setting | Status |
|---|---|
| Plugin installed | ✅ |
| Article schema as post default | ✅ |
| Person schema on About page | ✅ |
| Job title set (Retired HVAC Contractor) | ✅ |
| Author schema URL → About page | ⚠️ Not verified |
| Focus keywords on articles | ⚠️ Many missing |

### Schema Type Reference
| Content Type | Schema to Use |
|---|---|
| Standard blog post | Article |
| Install/repair how-to | HowTo |
| Q&A post | FAQ |
| About page | Person ✅ |

---

## Design Direction (Not Yet Implemented)

| Color | Hex | Use |
|---|---|---|
| Warm charcoal | #3D3530 | Primary text, headings |
| Deep forest green | #2C4A3E | Headers, buttons, accents |
| Muted brass/copper | #8B7355 | Highlight accents |
| Cream | #FAF7F2 | Page backgrounds |
| Cream alt | #F5F0E8 | Section backgrounds |

Goal: "Experienced technician" feel — not generic HVAC contractor website.

---

## Working Notes for Claude (Every Session)

- Audit live site before giving advice — do not rely on this document alone
- Give step-by-step click-by-click instructions — Chad is 80, not a developer
- Explain the why briefly — don't over-explain
- Never rewrite Chad's voice — structure and optimize only
- Always recommend staging for code changes
- Always remind Chad to purge WPX cache after saving
- Always verify changes in incognito window — Claude's fetch tool sees cached versions
- Eli handles advanced code — loop him in for GitHub, staging, CSS changes
- Keep solutions simple — Chad prefers maintainable over sophisticated

---

## Next Session — Pick Up Here

### Priority Order for Next Session:
1. 🔴 Verify About page — confirm new content is live (fetch + incognito check)
2. 🔴 Fix Privacy Policy — find/replace bychadpeterson.com
3. 🔴 Fix Disclaimer — find/replace bychadpeterson.com
4. 🔴 Add FTC disclosure to footer
5. 🟡 Fix mobile logo/photo overlap
6. 🟡 Install UpdraftPlus and connect to Google Drive
7. 🟡 Eli sets up GitHub repo
8. Begin internal linking — Heat Pump articles → /heat-pumps/

### Start Every Session With This Message:
> "I'm Chad Peterson, owner of homeheatproblems.com. Here is my project record file. Please audit the live site, compare to the known issues list, and tell me what we should work on today."
