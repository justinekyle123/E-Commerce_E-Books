<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Folio &amp; Quill | Curating the World's Finest Literature</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&amp;family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "secondary-fixed": "#e5e2dd",
                        "surface-variant": "#d5e3fc",
                        "on-surface": "#0d1c2e",
                        "on-error": "#ffffff",
                        "inverse-primary": "#bec6e0",
                        "on-tertiary-container": "#ba7062",
                        "on-primary-container": "#7c839b",
                        "secondary-container": "#e5e2dd",
                        "primary-container": "#131b2e",
                        "on-secondary-fixed-variant": "#474743",
                        "tertiary-fixed-dim": "#ffb4a6",
                        "primary-fixed-dim": "#bec6e0",
                        "on-primary-fixed": "#131b2e",
                        "surface-container-highest": "#d5e3fc",
                        "on-tertiary-fixed-variant": "#71352a",
                        "tertiary-container": "#390b05",
                        "outline": "#76777d",
                        "surface-tint": "#565e74",
                        "primary-fixed": "#dae2fd",
                        "on-surface-variant": "#45464d",
                        "on-primary": "#ffffff",
                        "on-secondary": "#ffffff",
                        "secondary-fixed-dim": "#c8c6c2",
                        "secondary": "#5f5e5b",
                        "primary": "#000000",
                        "error": "#ba1a1a",
                        "surface-container-lowest": "#ffffff",
                        "surface-dim": "#ccdbf3",
                        "inverse-surface": "#233144",
                        "outline-variant": "#c6c6cd",
                        "surface": "#f8f9ff",
                        "on-background": "#0d1c2e",
                        "on-tertiary": "#ffffff",
                        "error-container": "#ffdad6",
                        "on-tertiary-fixed": "#390b05",
                        "background": "#f8f9ff",
                        "surface-bright": "#f8f9ff",
                        "inverse-on-surface": "#eaf1ff",
                        "surface-container": "#e6eeff",
                        "on-primary-fixed-variant": "#3f465c",
                        "surface-container-high": "#dce9ff",
                        "on-error-container": "#93000a",
                        "tertiary-fixed": "#ffdad3",
                        "tertiary": "#000000",
                        "on-secondary-container": "#656461",
                        "surface-container-low": "#eff4ff",
                        "on-secondary-fixed": "#1c1c19"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "container-max": "1280px",
                        "section-gap": "96px",
                        "margin-desktop": "64px",
                        "margin-mobile": "20px",
                        "unit": "4px"
                    },
                    "fontFamily": {
                        "headline-sm": ["EB Garamond"],
                        "display-lg": ["EB Garamond"],
                        "caption": ["Hanken Grotesk"],
                        "headline-md": ["EB Garamond"],
                        "body-md": ["Hanken Grotesk"],
                        "label-md": ["Hanken Grotesk"],
                        "body-lg": ["Hanken Grotesk"],
                        "display-lg-mobile": ["EB Garamond"]
                    },
                    "fontSize": {
                        "headline-sm": ["24px", {"lineHeight": "1.4", "fontWeight": "600"}],
                        "display-lg": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "500"}],
                        "caption": ["12px", {"lineHeight": "1.4", "fontWeight": "400"}],
                        "headline-md": ["32px", {"lineHeight": "1.3", "fontWeight": "500"}],
                        "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "label-md": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "display-lg-mobile": ["36px", {"lineHeight": "1.2", "fontWeight": "500"}]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        .book-card-hover:hover {
            box-shadow: 0 12px 24px -8px rgba(13, 28, 46, 0.15);
            transform: translateY(-4px);
        }
        .glass-header {
            backdrop-filter: blur(8px);
            background-color: rgba(248, 249, 255, 0.85);
        }
        /* Smooth scroll is applied via html class "scroll-smooth" */
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md selection:bg-primary-container selection:text-white">
    <!-- TopNavBar -->
    <header class="fixed top-0 left-0 right-0 z-50 glass-header border-b border-outline-variant/10">
        <nav class="flex justify-between items-center w-full px-margin-mobile md:px-margin-desktop py-4 max-w-container-max mx-auto">
            <!-- Brand -->
            <div class="flex items-center gap-8">
                <a class="font-headline-md text-headline-md text-on-surface tracking-tight" href="#">Folio &amp; Quill</a>
                <!-- Desktop Nav Links -->
                <div class="hidden md:flex items-center gap-6">
                    <a class="font-label-md text-label-md text-primary border-b-2 border-primary pb-1" href="#">Fiction</a>
                    <a class="font-label-md text-label-md text-secondary hover:text-primary transition-colors duration-200" href="#">Non-Fiction</a>
                    <a class="font-label-md text-label-md text-secondary hover:text-primary transition-colors duration-200" href="#">Classics</a>
                    <a class="font-label-md text-label-md text-secondary hover:text-primary transition-colors duration-200" href="#">Poetry</a>
                </div>
            </div>
            <!-- Utility Actions -->
            <div class="flex items-center gap-4 md:gap-6">
                <div class="hidden lg:flex items-center bg-secondary-container/30 px-4 py-2 rounded-full border border-outline-variant/20">
                    <span class="material-symbols-outlined text-[20px] text-on-surface-variant mr-2">search</span>
                    <input class="bg-transparent border-none focus:ring-0 text-label-md p-0 w-48 font-headline-sm italic placeholder:opacity-50" placeholder="Search the library..." type="text"/>
                </div>
                <button class="p-2 hover:opacity-80 transition-opacity"><span class="material-symbols-outlined">shopping_cart</span></button>
                
                <!-- 🔁 REPLACED PERSON ICON WITH LOGIN / REGISTER BUTTONS (functional redirects) -->
                <div class="flex items-center gap-2">
                    <a href="{{ route('login') }}" 
                       class="inline-block px-4 py-1.5 text-sm font-medium text-on-surface border border-outline-variant/30 hover:bg-primary hover:text-white hover:border-primary rounded-sm transition-all duration-200">
                        Log in
                    </a>
                    <a href="{{ route('register') }}" 
                       class="inline-block px-4 py-1.5 text-sm font-medium bg-primary text-white hover:bg-on-surface-variant rounded-sm transition-all duration-200">
                        Register
                    </a>
                </div>

                <button class="md:hidden p-2"><span class="material-symbols-outlined">menu</span></button>
            </div>
        </nav>
    </header>

    <main class="pt-24">
        <!-- Hero Section: Book of the Month -->
        <section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-section-gap">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter items-center bg-surface-container-low p-8 md:p-16 rounded-lg relative overflow-hidden">
                <!-- Background Decoration -->
                <div class="absolute -top-24 -right-24 w-96 h-96 bg-primary-container/5 rounded-full blur-3xl"></div>
                <!-- Hero Image -->
                <div class="md:col-span-5 flex justify-center perspective-1000">
                    <div class="relative group">
                        <div class="absolute -inset-2 bg-on-surface/5 blur-xl group-hover:bg-on-surface/10 transition-all duration-500"></div>
                        <img class="w-full max-w-sm rounded-sm shadow-2xl relative z-10 transition-transform duration-700 group-hover:rotate-y-12" data-alt="A sophisticated hardback book cover featuring intricate gold foil lettering on a deep emerald green linen background. The book is titled 'The Silent Library' and is displayed at an angle to showcase the thick, high-quality ivory paper edges. Soft, directional library lighting creates elegant shadows, emphasizing the premium tactile texture of the fabric cover. The overall aesthetic is classical yet modern, fitting for a curated literary boutique." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdB-TFQlD0ZROqBoEGCNCl6n2F1bY_Ka-cjQyZETXNJ-YhbY5DzIHatazzfGkmh0nN1xldN-m40-lnekmGaGlrp3PlK6KN6vpm9D8SzsCrgUEcN_JmVvDQOzTvFK_jNRHBOKm_tpQIqVsKcu5fXKNbb5euDCxqcuwmbj6mhOxqZKzA-EAza5XdUEmq4WvpzdciCVTKXaLAe-Z0shU2kSg4UAr3OVGWYY6bslNna9q3e9PAxC-RxhZOtmUfI_GZTc6JNITbTk2jn9Q"/>
                    </div>
                </div>
                <!-- Hero Content -->
                <div class="md:col-span-7 mt-8 md:mt-0 flex flex-col items-start">
                    <span class="font-label-md text-label-md uppercase tracking-[0.2em] text-on-tertiary-container mb-4">Book of the Month</span>
                    <h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg mb-6 leading-tight">The Art of Stillness in a World of Noise</h1>
                    <p class="font-body-lg text-body-lg text-secondary mb-8 max-w-xl">
                        A definitive exploration into the curation of silence. This limited edition volume features hand-pressed paper and exclusive commentary from the world's most renowned minimalists.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <button class="bg-primary text-on-primary px-8 py-4 font-label-md text-label-md transition-all hover:bg-on-surface-variant flex items-center gap-2">
                            Add to Library — $42.00
                        </button>
                        <button class="border border-outline-variant px-8 py-4 font-label-md text-label-md hover:bg-surface-container transition-colors">
                            View Details
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- New Arrivals Grid -->
        <section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-section-gap">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="font-headline-md text-headline-md mb-2">New Arrivals</h2>
                    <p class="text-secondary font-body-md italic">Freshly unboxed from our curators' latest findings.</p>
                </div>
                <a class="font-label-md text-label-md underline underline-offset-8 decoration-outline-variant hover:decoration-primary transition-all" href="#">View All</a>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-gutter">
                <!-- Book Card 1 -->
                <div class="flex flex-col group cursor-pointer">
                    <div class="aspect-[3/4] mb-4 overflow-hidden border border-outline-variant/10 bg-white p-2 md:p-4 book-card-hover transition-all duration-300">
                        <img class="w-full h-full object-cover shadow-sm" data-alt="A minimalist book cover titled 'Echoes of Midnight' with a single silver celestial moon phase illustration on a matte charcoal background. The design is clean and modern, following the Literary Modern aesthetic with generous white space and sharp typography. The book is presented in a high-key studio environment with soft ambient lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBxS6bZDodf-yedGEcdr3f5qU8fxujnfn3ju7gR0eKPXcHzlfPSlBVZZffJIrcqOpdJ3q4rgY5lBLuAHn02xYOFKTjyA32rioAr85sTToS_1IIsCvZRfjWE4h7pHeE9yiVZQ4yH4jrKs5wQu19rdmv5pBg6S4ionGsrrk2YBdZIabWn-vMjijrBwomDsu4FPy2s6wd6mxjsM3dVpVK0tWZ3cuF_BuTFF9PFWsAOKL7JWbAeqsfmCEeqmQ16XrQhL53QMlz72kLCnYc"/>
                    </div>
                    <h3 class="font-headline-sm text-[18px] mb-1 group-hover:text-primary transition-colors">Echoes of Midnight</h3>
                    <p class="text-secondary font-body-md text-sm mb-2">Julian V. Sterling</p>
                    <p class="font-label-md text-label-md">$28.00</p>
                </div>
                <!-- Book Card 2 -->
                <div class="flex flex-col group cursor-pointer">
                    <div class="aspect-[3/4] mb-4 overflow-hidden border border-outline-variant/10 bg-white p-2 md:p-4 book-card-hover transition-all duration-300">
                        <img class="w-full h-full object-cover shadow-sm" data-alt="A vibrant book cover featuring an abstract oil painting of a Mediterranean coastline in warm terracotta, ochre, and deep blue. The typography is bold and modern, titled 'The Sunlit Path'. The scene reflects a warm, Mediterranean summer afternoon with high contrast and golden hour light, maintaining a premium academic feel." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBzE0MKwfae5MKJb2xgNjBok7vxHd5_Pu1vTzBw5bpc3JcE455PAcr_mTBAhu5Jr9ZbcRmuMttTCNm14XArZQcO3_-rdwIdkGYPFu_2WAKg95dZmrB7GGseFvTqJxjpgSC1tY5enyet8iYLzfI46Xj8m3l0KlDigShJqeyjN3mvB6yTOXO5wMc1LW7JY-sMultShvRINSU-aTdMPcIcncukP83t81JrwBz5aJ1jaYFv61zBE5LdV1Xxsp3S2GUR-xpSsnlo4e8KrqM"/>
                    </div>
                    <h3 class="font-headline-sm text-[18px] mb-1 group-hover:text-primary transition-colors">The Sunlit Path</h3>
                    <p class="text-secondary font-body-md text-sm mb-2">Elena Rossi</p>
                    <p class="font-label-md text-label-md">$34.00</p>
                </div>
                <!-- Book Card 3 -->
                <div class="flex flex-col group cursor-pointer">
                    <div class="aspect-[3/4] mb-4 overflow-hidden border border-outline-variant/10 bg-white p-2 md:p-4 book-card-hover transition-all duration-300">
                        <img class="w-full h-full object-cover shadow-sm" data-alt="A classical leather-bound book cover with a deep navy texture and blind-embossed geometric patterns. Titled 'Verses of the North' in a refined serif font. The lighting is low-key, spotlighting the texture of the grain and the depth of the emboss, creating an atmosphere of antique sophistication and quiet study." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDoJ-B-KEDMtBI62egqtT5Dfl3M2uiNg_n4_kEzqg_cQmzo1KatdFLgLTz3KTmsaHLI07jDDCm2WXQvV832azDHynORNPiytCIMckvTFqE9Eo-6RdB6jjSJP9iQnZ2nQ58RD1_42qKpJOxkWVBBeaHgNVqhtXfHxAfxKapTtXsXVzAj1Sb2_FKtenylMstchv-Zl_eEU0hXnWpvf1HJ6srA1akmydOZC2QzhdoDuHjdKnchIYErYEdNDLsugFPVywXJWr30aBK6U-M"/>
                    </div>
                    <h3 class="font-headline-sm text-[18px] mb-1 group-hover:text-primary transition-colors">Verses of the North</h3>
                    <p class="text-secondary font-body-md text-sm mb-2">Arvid Holmgren</p>
                    <p class="font-label-md text-label-md">$45.00</p>
                </div>
                <!-- Book Card 4 -->
                <div class="flex flex-col group cursor-pointer">
                    <div class="aspect-[3/4] mb-4 overflow-hidden border border-outline-variant/10 bg-white p-2 md:p-4 book-card-hover transition-all duration-300">
                        <img class="w-full h-full object-cover shadow-sm" data-alt="A modern botanical illustration on a soft cream book cover. The title 'Wild Bloom' is written in a delicate, handwritten script overlaying pressed flower designs. The color palette is earthy and organic, using muted sages and dusty pinks. The image captures the essence of a serene, nature-inspired reading experience in a bright airy studio." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDFsW-p4tjM9qM2PFE9O8_PMLdzc1NpyXWiOwLpW2yJh2TEVgoafrbMUMhX0WK9qSoaSgNhUQYqBM0lUEp65BZWVE0d6smk5Cm2jCvm8h8NR4lbu1VcNs-FTOZMxozGJ6TkmKLXnO4wUy3mZswAGVu2xRIh2oHAGoa3dCEGI5OLVHC6QzfGmlPwvWQovR71_FvQdIPFrhQAzkEZu9Ze98Gmp5NTIj7C_8hb1PQ5Cdr7Z3Juvxr5OiY6QblH62Vn4H2SzU8oMZxOhkU"/>
                    </div>
                    <h3 class="font-headline-sm text-[18px] mb-1 group-hover:text-primary transition-colors">Wild Bloom</h3>
                    <p class="text-secondary font-body-md text-sm mb-2">Clara Thorne</p>
                    <p class="font-label-md text-label-md">$24.00</p>
                </div>
            </div>
        </section>

        <!-- Genre Bento Grid -->
        <section class="bg-surface-container-low py-section-gap overflow-hidden">
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="text-center mb-16">
                    <h2 class="font-headline-md text-headline-md mb-4 italic">Curated Collections</h2>
                    <p class="text-secondary font-body-md max-w-lg mx-auto">Explore our library through curated lens, from timeless classics to modern inquiries.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 md:grid-rows-2 gap-4 h-[600px]">
                    <!-- Fiction -->
                    <div class="md:col-span-2 md:row-span-2 relative group overflow-hidden cursor-pointer">
                        <div class="absolute inset-0 bg-primary/40 group-hover:bg-primary/20 transition-all duration-500 z-10"></div>
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A dreamy, cinematic shot of a person reading by a large arched window with soft morning light streaming through. Dust motes dance in the light, and a stack of various novels sits nearby. The style is soft, warm, and romanticized, evoking the feeling of being lost in a fictional world. The color palette features warm beiges and deep navy shadows." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-lBsu78F4WlAN-1eXr2L4t5HeXKpxoSYmP8ep2qoSjxNDhb3i_7R-PKhckZRpPeQ3L5nhhqeWCR42t_q0CXYr0xZBL5zk0pW5MjOHKyQjLgGtqVxqxk8YNKQzbYpXLgmy1Plt3Kikf5CTQKbCZoGiv595FzJfJeQTtaB_CvB039VN-_IFjTzHFkYDWxgVu2wLDsppYiN4ypstmp7VGhQvonUp99qMpHsVVq4NTP-fDQr5NBkQwQan9xBrriiDiZmzZeEf9_a-bEw"/>
                        <div class="absolute bottom-8 left-8 z-20">
                            <h3 class="font-display-lg text-white mb-2">Fiction</h3>
                            <p class="text-white/80 font-label-md uppercase tracking-widest">Stories that stay</p>
                        </div>
                    </div>
                    <!-- History -->
                    <div class="md:col-span-2 relative group overflow-hidden cursor-pointer">
                        <div class="absolute inset-0 bg-on-surface-variant/40 group-hover:bg-on-surface-variant/20 transition-all duration-500 z-10"></div>
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="Close up of an ancient desk with antique maps, a brass magnifying glass, and several leather-bound history volumes. The lighting is warm and candle-lit, highlighting the rich textures of old paper and wood. The composition is focused and academic, capturing the allure of discovering the past." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDN1qqFa8EyyF2Mu3E9620ehKxCouSLFS5qIqpvSxVyDzK3nDbKxCOrGk99pOd4ED3kDSof0Wa3hcoV6mOGC1DwALH8DEsudEaljTfjgT8MsyTLrfBZ-5AUWXiTRypcAI9BGBqrZZB8xXN6zVw26yFXndPLVsVvVDs2AhNn2PudgfWGjqhZCoan-6yZXuc4D0Ck717uUF1sFHhFDpL6inn2PMBDy5H7qGliP_SiWlTeinOy5osGdSk_jpMg8gJ1MumJ2NfrYOsJvSg"/>
                        <div class="absolute bottom-8 left-8 z-20">
                            <h3 class="font-headline-md text-white">History</h3>
                        </div>
                    </div>
                    <!-- Poetry -->
                    <div class="relative group overflow-hidden cursor-pointer">
                        <div class="absolute inset-0 bg-tertiary-container/40 group-hover:bg-tertiary-container/20 transition-all duration-500 z-10"></div>
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="Minimalist composition of a single white feather resting on a page of hand-written poetry. The lighting is soft and ethereal, using a high-key white-on-white aesthetic. The scene is calm, delicate, and deeply artistic, emphasizing the rhythmic soul of poetic literature." src="https://lh3.googleusercontent.com/aida-public/AB6AXuABMzWbBULlyQz197e7ZjI0bjOVO95ahMs8KASUlaP0VEYJetmBzYbpQCOZ-2Hajhz6INoVbC6AKLXKcDD4VCsKcgCxq9RZP_dJvCsnH3eDic5IMDvStYaZPZVNQib-dtN9LJcfduWAqilOR91HD3_DFAPyVcMMivJHIk3qjZntIUVhYD8gZqsDtPoZhiZ8IO2q1UQnGEG4pcgI30CvB5oBIphb1mX6ERzXeIpbJgHWhc-cfBCwycZZSwFgGiVNjeDI3DitJI_qmAU"/>
                        <div class="absolute bottom-6 left-6 z-20">
                            <h3 class="font-headline-sm text-white">Poetry</h3>
                        </div>
                    </div>
                    <!-- Science -->
                    <div class="relative group overflow-hidden cursor-pointer">
                        <div class="absolute inset-0 bg-on-primary-container/40 group-hover:bg-on-primary-container/20 transition-all duration-500 z-10"></div>
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A modern scientific laboratory aesthetic featuring abstract glass prisms refracting light into soft rainbows across a sleek, black surface. Nearby is a stack of hardcover science and philosophy books. The look is futuristic, intellectual, and crisp, using sharp focus and cool-toned lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDFdX6hoEuYRUc7_MQsLoLDra9GTHWOlQ9EXjRsZAX6FSRe11JcBFYaKfuO6mX7-_0eT-_g7EQ0JesF5uxrVHSiM2OzXFjIge435NfiDwySapm2teE_dJOLS0_34bQ27zLw6_oOoGA2gIuLFjRGhrfMYV2Q89NSmvBhfy2ENKGowXaIty-Opf7Y1uQFbPNR4DnSyslwXbFveaJIBH_-ZfsHS2f6VLYE_5YEHpbrOMyBTXkPVMsRacN4xOCK1lOLzIa7wr9EFywE0QU"/>
                        <div class="absolute bottom-6 left-6 z-20">
                            <h3 class="font-headline-sm text-white">Science</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Staff Favorites -->
        <section class="max-w-container-max mx-auto px-margin-desktop py-section-gap">
            <div class="flex items-center justify-between mb-12">
                <h2 class="font-headline-md text-headline-md">Staff Favorites</h2>
                <div class="flex gap-2">
                    <button class="w-10 h-10 border border-outline-variant rounded-full flex items-center justify-center hover:bg-on-surface-variant hover:text-white transition-all">
                        <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                    </button>
                    <button class="w-10 h-10 border border-outline-variant rounded-full flex items-center justify-center hover:bg-on-surface-variant hover:text-white transition-all">
                        <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                    </button>
                </div>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-gutter">
                <!-- Book Card 5 -->
                <div class="flex flex-col group cursor-pointer">
                    <div class="aspect-[3/4] mb-4 overflow-hidden border border-outline-variant/10 bg-white p-2 md:p-4 book-card-hover transition-all duration-300">
                        <img class="w-full h-full object-cover shadow-sm" data-alt="A vintage style book cover with cream background and dark burgundy typography titled 'The Old Oak'. It features a detailed engraving of a majestic oak tree. The mood is nostalgic and grounded, reflecting a high-end classical library aesthetic with soft, directional window lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAcHWJEI-8JWpBouy0enJcAjZfctFzWb-T77L8EjmaL6j8PtE4RronQho6EAtNiStxmPzElvQ1Tasf70g2qfQLr7B4E8zV4zEQka2KcJgmMM_fWzG_bWI7Exjlxk1ObddxwYH1oW4Y-TRA8sdY8n5h44UTCjPlRzYYKGRfN8gQDx8DwoyMtqc9nSpNzePcWUbOZb6d-YlYXW-CBdCOXwliOrJkTKI8om_r_ANyZvIaQH-Cn9gOPStt-7jDf4crKTOM7qCdsGuquUH4"/>
                    </div>
                    <div class="flex items-center gap-1 mb-1">
                        <span class="material-symbols-outlined text-[14px] text-tertiary-fixed-dim" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="font-label-md text-[10px] text-secondary">CURATOR'S CHOICE</span>
                    </div>
                    <h3 class="font-headline-sm text-[18px] mb-1 group-hover:text-primary transition-colors">The Old Oak</h3>
                    <p class="text-secondary font-body-md text-sm mb-2">Samuel Greene</p>
                    <p class="font-label-md text-label-md">$31.00</p>
                </div>
                <!-- Book Card 6 -->
                <div class="flex flex-col group cursor-pointer">
                    <div class="aspect-[3/4] mb-4 overflow-hidden border border-outline-variant/10 bg-white p-2 md:p-4 book-card-hover transition-all duration-300">
                        <img class="w-full h-full object-cover shadow-sm" data-alt="A sleek black book cover with a thin, iridescent holographic foil stripe running diagonally across. Titled 'Prism Theory' in a futuristic sans-serif. The lighting reflects the holographic effect, creating a vibrant yet sophisticated professional e-commerce visual." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHi7xAzVofL_0_JYO4Sfa47ELnlQDn1l70f0mn9GEIhk2Jo-5B-KR--gEAeZVccHlHDj_4tVjnlFBH6nFr9wwmxdoJ_ihseLgvJW3qQ1OIFOSnUIJUPomtMU7jmGhM8JhVzyVNVQ_WuA51EdKKlL-XCvlZkPbKmUU5qYpSkcVJ1vTqK5zvQywuVAcb6mVDRVpC04tDFmSRIer-01xkwh9ATlPM-cNne146OKLHBfhbQlNhutISccEZgcpcFxPhLz0icILu7mrCdWk"/>
                    </div>
                    <h3 class="font-headline-sm text-[18px] mb-1 group-hover:text-primary transition-colors">Prism Theory</h3>
                    <p class="text-secondary font-body-md text-sm mb-2">Dr. Maya Lin</p>
                    <p class="font-label-md text-label-md">$39.50</p>
                </div>
                <!-- Book Card 7 -->
                <div class="flex flex-col group cursor-pointer">
                    <div class="aspect-[3/4] mb-4 overflow-hidden border border-outline-variant/10 bg-white p-2 md:p-4 book-card-hover transition-all duration-300">
                        <img class="w-full h-full object-cover shadow-sm" data-alt="An elegant ivory book cover with a minimalist blind-debossed silhouette of a grand manor. The title 'Haunted Halls' is printed in a thin, spaced-out serif. The mood is gothic yet restrained, using soft grey shadows to create depth on the textured paper surface." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCx-BPHqDVuwS5lCc01DukS87jKSEDesY4EUQZ81tq_hVUzjehCbN1ooFVjKgpFUPNp2lKiA_CAGR8A8nXjds_WcxL7369FEnxuR6BowVS-svdXx64QI_bxX4zmmvfXqX0tXTjfFSXMZBVbh8m6GmmH5IAEzPfZ2RBL4T7PaD8waH6BhXbE7mDPycTZmnOeLMhZnuBdpTbNLs8VOpwJ_ftmUNt6HzbzU-DffQzwvpPmKAcIqzysXURZGeHyOumKme3-ofw_eIqyrmc"/>
                    </div>
                    <h3 class="font-headline-sm text-[18px] mb-1 group-hover:text-primary transition-colors">Haunted Halls</h3>
                    <p class="text-secondary font-body-md text-sm mb-2">Victoria Black</p>
                    <p class="font-label-md text-label-md">$29.00</p>
                </div>
                <!-- Book Card 8 -->
                <div class="flex flex-col group cursor-pointer">
                    <div class="aspect-[3/4] mb-4 overflow-hidden border border-outline-variant/10 bg-white p-2 md:p-4 book-card-hover transition-all duration-300">
                        <img class="w-full h-full object-cover shadow-sm" data-alt="A beautiful linen-covered book in a soft sage green with white silk-screened illustrations of medicinal herbs. Titled 'The Healer's Garden'. The presentation is organic and serene, captured in a bright conservatory with plants in the blurred background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqitYzfBvyGbtY3A5a8wOKKukClZmMs5jqRwkOYwjOUA-alUqD39_gVoTp8gWRUAfC8izrWqUWWyj_bwd1TFxOZ4KvSc1uoOOmKqjYJlewa0vfS76SB38NYtk8EUXI5oGL9hdQghpRCorQuCF6Id6xGfju7s2CqisWifd8Z6fbb8bqGe41ya2ankXFTAr-JL5wvfk4-NFYLJym-Zjvm23PobzkTYPF2I8uF3hUBH9KdCLq1IELSeGLG9V7i5_JYaGGwWWszPu3Lus"/>
                    </div>
                    <h3 class="font-headline-sm text-[18px] mb-1 group-hover:text-primary transition-colors">The Healer's Garden</h3>
                    <p class="text-secondary font-body-md text-sm mb-2">Thomas Thorne</p>
                    <p class="font-label-md text-label-md">$35.00</p>
                </div>
            </div>
        </section>

        <!-- Mission / About Section -->
        <section class="max-w-4xl mx-auto px-margin-mobile text-center py-section-gap border-t border-outline-variant/10">
            <span class="material-symbols-outlined text-4xl text-primary mb-8">menu_book</span>
            <h2 class="font-display-lg text-display-lg-mobile md:text-display-lg mb-8 italic">Curated for the Discerning Reader</h2>
            <p class="font-body-lg text-body-lg text-secondary leading-relaxed mb-10">
                At Folio &amp; Quill, we believe books are not just data; they are physical artifacts of human thought. We meticulously source limited editions, artisan pressings, and the finest contemporary works to ensure your library is a reflection of your intellectual curiosity.
            </p>
            <div class="flex justify-center gap-12">
                <div class="flex flex-col items-center">
                    <span class="font-headline-md text-primary">12k+</span>
                    <span class="font-label-md text-secondary uppercase tracking-widest text-[10px]">Volumes Curated</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="font-headline-md text-primary">45</span>
                    <span class="font-label-md text-secondary uppercase tracking-widest text-[10px]">Global Curators</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="font-headline-md text-primary">100%</span>
                    <span class="font-label-md text-secondary uppercase tracking-widest text-[10px]">Eco-Conscious Shipping</span>
                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="bg-primary-container text-on-primary py-24 px-margin-mobile">
            <div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="font-display-lg text-white mb-4">The Weekly Reader</h2>
                    <p class="text-on-primary-container font-body-lg">Essays on literature, upcoming releases, and exclusive curator notes delivered to your inbox every Sunday morning.</p>
                </div>
                <form class="flex flex-col sm:flex-row gap-4" onsubmit="event.preventDefault(); alert('Welcome to the library, reader.');">
                    <input class="flex-grow bg-white/5 border border-white/20 rounded-sm px-6 py-4 text-white placeholder:text-white/40 focus:outline-none focus:ring-1 focus:ring-on-tertiary-container font-headline-sm italic" placeholder="Enter your email address" required="" type="email"/>
                    <button class="bg-white text-primary px-10 py-4 font-label-md text-label-md hover:bg-secondary-fixed transition-colors" type="submit">Subscribe</button>
                </form>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-surface-container-low dark:bg-surface-container-highest border-t border-outline-variant/10">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-gutter px-margin-mobile md:px-margin-desktop py-16 max-w-container-max mx-auto">
            <!-- Brand Info -->
            <div class="md:col-span-1">
                <h2 class="font-headline-sm text-headline-sm text-primary dark:text-inverse-primary mb-6">Folio &amp; Quill</h2>
                <p class="text-secondary font-body-md mb-8">Crafting a sanctuary for readers in the digital age. Your curated library begins here.</p>
                <div class="flex gap-4">
                    <a class="w-8 h-8 rounded-full border border-outline-variant flex items-center justify-center hover:bg-primary hover:text-white transition-all" href="#"><span class="material-symbols-outlined text-sm">share</span></a>
                    <a class="w-8 h-8 rounded-full border border-outline-variant flex items-center justify-center hover:bg-primary hover:text-white transition-all" href="#"><span class="material-symbols-outlined text-sm">public</span></a>
                    <a class="w-8 h-8 rounded-full border border-outline-variant flex items-center justify-center hover:bg-primary hover:text-white transition-all" href="#"><span class="material-symbols-outlined text-sm">alternate_email</span></a>
                </div>
            </div>
            <!-- Quick Links -->
            <div>
                <h4 class="font-label-md text-label-md text-on-surface mb-6 uppercase tracking-widest">Library Services</h4>
                <ul class="space-y-4">
                    <li><a class="text-secondary font-body-md hover:text-primary transition-all duration-300 underline decoration-1 underline-offset-4 decoration-transparent hover:decoration-primary" href="#">About Our Library</a></li>
                    <li><a class="text-secondary font-body-md hover:text-primary transition-all duration-300 underline decoration-1 underline-offset-4 decoration-transparent hover:decoration-primary" href="#">Shipping &amp; Returns</a></li>
                    <li><a class="text-secondary font-body-md hover:text-primary transition-all duration-300 underline decoration-1 underline-offset-4 decoration-transparent hover:decoration-primary" href="#">Membership Program</a></li>
                    <li><a class="text-secondary font-body-md hover:text-primary transition-all duration-300 underline decoration-1 underline-offset-4 decoration-transparent hover:decoration-primary" href="#">Gift Cards</a></li>
                </ul>
            </div>
            <!-- Shop Categories -->
            <div>
                <h4 class="font-label-md text-label-md text-on-surface mb-6 uppercase tracking-widest">Inquiries</h4>
                <ul class="space-y-4">
                    <li><a class="text-secondary font-body-md hover:text-primary transition-all duration-300 underline decoration-1 underline-offset-4 decoration-transparent hover:decoration-primary" href="#">Contact Curator</a></li>
                    <li><a class="text-secondary font-body-md hover:text-primary transition-all duration-300 underline decoration-1 underline-offset-4 decoration-transparent hover:decoration-primary" href="#">Wholesale Orders</a></li>
                    <li><a class="text-secondary font-body-md hover:text-primary transition-all duration-300 underline decoration-1 underline-offset-4 decoration-transparent hover:decoration-primary" href="#">Rare Finds Request</a></li>
                    <li><a class="text-secondary font-body-md hover:text-primary transition-all duration-300 underline decoration-1 underline-offset-4 decoration-transparent hover:decoration-primary" href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <!-- Address -->
            <div>
                <h4 class="font-label-md text-label-md text-on-surface mb-6 uppercase tracking-widest">The Sanctuary</h4>
                <p class="text-secondary font-body-md italic leading-relaxed">
                    221B Literary Row<br/>
                    Suite 400, Curated Park<br/>
                    New York, NY 10001
                </p>
                <p class="mt-4 text-primary font-label-md">Open Daily: 9am — 9pm</p>
            </div>
        </div>
        <div class="border-t border-outline-variant/10 py-8 px-margin-mobile text-center">
            <p class="font-label-md text-label-md text-secondary opacity-60">© 2024 Folio &amp; Quill. Curating the world's finest literature. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Smooth scroll for anchor links (already handled by scroll-smooth class on html)
        // Plus intersection observer for book cards
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-8');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.book-card-hover').forEach(card => {
            card.classList.add('transition-all', 'duration-700', 'opacity-0', 'translate-y-8');
            observer.observe(card);
        });
    </script>
</body>
</html>