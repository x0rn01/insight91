i18next.init({
    lng: 'en',
    debug: true,
    resources: {
        "en": {
            "translation": {
                "navbar_home": "Home",
                "title": "Insight 91: Business Intelligence & Data Analytics in Sports",
                "subtitle": "From Insights to Impact.",
                "tagline": "Elevate Your Business with Smart Analytics.",
                "explore_now_button": "Explore Now",
                "contact_us_button": "Contact Us",
                "years_experience": "Year Experience",
                "empower_business": "Empower your business with cutting-edge BI solutions",
                "unlock_potential": "Unlock the full potential of your data, fostering a culture of data literacy within your organization and dive into a transformative journey towards becoming a truly data-driven company.",
                "actionable_insights": "Explore how actionable insights can drive informed decision-making, ensuring your business stays ahead in today's dynamic landscape.",
                "customized_solutions": "Customized Solutions",
                "customized_solutions_description": "Our commitment lies in delivering customized BI solutions, tailoring each aspect to meet your unique requirements while adhering to industry standards.",
                "data_integration": "Data Integration",
                "data_integration_description": "Seamlessly integrating diverse data sources, we provide you with a comprehensive view, ensuring your decision-making is well-informed and agile.",
                "advanced_analytics": "Advanced Analytics",
                "advanced_analytics_description": "Explore advanced analytics, including predictive modeling and machine learning, unlocking hidden insights and predicting future trends.",
                "training_support": "Training and Support",
                "training_support_description": "Empower your team through comprehensive training programs and ongoing support, enhancing data literacy and maximizing the value of BI tools.",
                "user_friendly_interfaces": "User-Friendly Interfaces",
                "user_friendly_interfaces_description": "Prioritize user experience with our user-friendly interfaces, ensuring that interacting with data is intuitive and efficient for your team.",
                "data_security": "Data Security",
                "data_security_description": "Rest easy with robust data security measures in place, instilling confidence in the protection of your sensitive business information.",
                "reasons_to_choose_us": "A few reasons why our valued customers choose us",
                "cutting_edge_tools": "Cutting-Edge Analytical Tools",
                "top_customized_solutions": "Top-Customized Solutions and Expert Support",
                "top_customized_solutions_description": "We stand out by offering personalized Business Intelligence solutions tailored to each client's unique needs, accompanied by expert guidance and support, ensuring seamless integration and maximized value.",
                "business_growth_impact": "Proven Impact on Business Growth",
                "discover_bi_expertise": "Discover how our Business Intelligence expertise can elevate your sector to new heights of performance and insight",
                "sport_button": "Sport",
                "business_button": "Business"
            }
        },
        "fr": {
            "translation": {
                "navbar_home": "Accueil",
                "title": "Insight 91 : Intelligence d'Affaires et Analytique de Données dans le Sport",
                "subtitle": "Des Insights à l'Impact.",
                "tagline": "Élevez votre entreprise avec des analyses intelligentes.",
                "explore_now_button": "En savoir plus",
                "contact_us_button": "Contactez-nous",
                "years_experience": "Années d'Expérience",
                "empower_business": "Renforcez votre entreprise avec des solutions BI de pointe",
                "unlock_potential": "Libérez tout le potentiel de vos données, en favorisant une culture de la littératie des données au sein de votre organisation et embarquez dans un voyage transformationnel vers une entreprise véritablement pilotée par les données.",
                "actionable_insights": "Découvrez comment des insights actionnables peuvent piloter la prise de décisions éclairées, assurant que votre entreprise reste en tête dans le paysage dynamique actuel.",
                "customized_solutions": "Solutions Personnalisées",
                "customized_solutions_description": "Notre engagement est de fournir des solutions BI personnalisées, adaptant chaque aspect pour répondre à vos besoins uniques tout en respectant les normes de l'industrie.",
                "data_integration": "Intégration de Données",
                "data_integration_description": "En intégrant de manière transparente diverses sources de données, nous vous offrons une vue complète, assurant que vos décisions sont bien informées et agiles.",
                "advanced_analytics": "Analyses Avancées",
                "advanced_analytics_description": "Explorez des analyses avancées, incluant la modélisation prédictive et l'apprentissage automatique, débloquant des insights cachés et prédisant les tendances futures.",
                "training_support": "Formation et Support",
                "training_support_description": "Renforcez votre équipe grâce à des programmes de formation complets et un support continu, améliorant la littératie des données et maximisant la valeur des outils BI.",
                "user_friendly_interfaces": "Interfaces Conviviales",
                "user_friendly_interfaces_description": "Priorisez l'expérience utilisateur avec nos interfaces conviviales, assurant que l'interaction avec les données soit intuitive et efficace pour votre équipe.",
                "data_security": "Sécurité des Données",
                "data_security_description": "Soyez tranquille avec des mesures de sécurité des données robustes en place, instaurant une confiance dans la protection de vos informations d'affaires sensibles.",
                "reasons_to_choose_us": "Quelques raisons pour lesquelles nos clients précieux nous choisissent",
                "cutting_edge_tools": "Outils Analytiques à la Pointe",
                "top_customized_solutions": "Solutions Personnalisées et Support Expert",
                "top_customized_solutions_description": "Nous nous distinguons en offrant des solutions de Business Intelligence personnalisées, adaptées aux besoins uniques de chaque client, accompagnées de conseils d'experts et d'un soutien continu, garantissant une intégration fluide et une valeur maximisée.",
                "business_growth_impact": "Impact Prouvé sur la Croissance des Entreprises",
                "discover_bi_expertise": "Découvrez comment notre expertise en Business Intelligence peut élever votre secteur à de nouveaux sommets de performance et de perspicacité",
                "sport_button": "Sport",
                "business_button": "Affaires"
            }
        }
    }
}, function(err, t) {
    if (err) return console.error(err);
    updateContent(); // Call to update the content on initial load
});

function changeLang(lang) {
    i18next.changeLanguage(lang, function(err) {
        if (err) {
            console.error('Error changing language:', err);
            return;
        }
        updateContent(); // This function should update all content based on the new language

        // Update the language label in both original and cloned navbar
        const originalNavbarLangLabel = document.getElementById('currentLang'); // Assuming this is in the original navbar
        const clonedNavbarLangLabel = document.querySelector('.navbar-clone #currentLang'); // Cloned navbar

        const langText = lang.toUpperCase();

        if (originalNavbarLangLabel) {
            originalNavbarLangLabel.textContent = langText;
        } else {
            console.error('Original navbar language label not found');
        }

        if (clonedNavbarLangLabel) {
            clonedNavbarLangLabel.textContent = langText;
        } else {
            console.log('Cloned navbar language label not found, may not be cloned yet');
        }
    });
}



function updateContent() {
    // Ensure all these elements exist in your HTML and have correct IDs or selectors
    document.querySelector('title').textContent = i18next.t('title');
    document.getElementById('subtitle').innerHTML = i18next.t('subtitle');
    document.getElementById('tagline').innerHTML = i18next.t('tagline');
    document.getElementById('explore_now_button').innerHTML = i18next.t('explore_now_button');
    document.getElementById('contact_us_button').innerHTML = i18next.t('contact_us_button');
    document.getElementById('years_experience').innerHTML = i18next.t('years_experience');
    document.getElementById('empower_business').innerHTML = i18next.t('empower_business');
    document.getElementById('unlock_potential').innerHTML = i18next.t('unlock_potential');
    document.getElementById('actionable_insights').innerHTML = i18next.t('actionable_insights');
    document.getElementById('customized_solutions').innerHTML = i18next.t('customized_solutions');
    document.getElementById('customized_solutions_description').innerHTML = i18next.t('customized_solutions_description');
    document.getElementById('data_integration').innerHTML = i18next.t('data_integration');
    document.getElementById('data_integration_description').innerHTML = i18next.t('data_integration_description');
    document.getElementById('advanced_analytics').innerHTML = i18next.t('advanced_analytics');
    document.getElementById('advanced_analytics_description').innerHTML = i18next.t('advanced_analytics_description');
    document.getElementById('training_support').innerHTML = i18next.t('training_support');
    document.getElementById('training_support_description').innerHTML = i18next.t('training_support_description');
    document.getElementById('user_friendly_interfaces').innerHTML = i18next.t('user_friendly_interfaces');
    document.getElementById('user_friendly_interfaces_description').innerHTML = i18next.t('user_friendly_interfaces_description');
    document.getElementById('data_security').innerHTML = i18next.t('data_security');
    document.getElementById('data_security_description').innerHTML = i18next.t('data_security_description');
    document.getElementById('reasons_to_choose_us').innerHTML = i18next.t('reasons_to_choose_us');
    document.getElementById('cutting_edge_tools').innerHTML = i18next.t('cutting_edge_tools');
    document.getElementById('top_customized_solutions').innerHTML = i18next.t('top_customized_solutions');
    document.getElementById('top_customized_solutions_description').innerHTML = i18next.t('top_customized_solutions_description');
    document.getElementById('business_growth_impact').innerHTML = i18next.t('business_growth_impact');
    document.getElementById('discover_bi_expertise').innerHTML = i18next.t('discover_bi_expertise');
    document.getElementById('sport_button').innerHTML = i18next.t('sport_button');
    document.getElementById('business_button').innerHTML = i18next.t('business_button');
    document.getElementById('navbar_home').textContent = i18next.t('navbar_home');
}

window.changeLang = changeLang;