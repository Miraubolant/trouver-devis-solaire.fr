<?php
/**
 * ============================================
 * ANNUAIRE-PANNEAUX-SOLAIRES.FR - CONFIGURATION
 * ============================================
 */

define('SITE_NAME', 'trouver-devis-solaire.fr');
define('SITE_DOMAIN', 'trouver-devis-solaire.fr');
define('SITE_URL', 'https://trouver-devis-solaire.fr');
define('SITE_EMAIL', 'contact@trouver-devis-solaire.fr');
define('SITE_TAGLINE', "Panneaux Solaires & Photovoltaïques Partout en France");
define('SITE_DESCRIPTION', "Trouvez un installateur RGE pour votre projet de panneaux solaires et autoconsommation.");

define('SITE_LOGO_TEXT', 'TROUVER-DEVIS-SOLAIRE');
define('SITE_LOGO_TLD', '.FR');

define('METIER', "installateur solaire");
define('METIER_PLURAL', "installateurs solaires");
define('METIER_TITLE', "Installateur Solaire");
define('METIER_ICON', "sun");

define('VUD_PARTENAIRE_ID', '2372');
define('VUD_CATEGORIE_ID', '37');
define('VUD_IFRAME_URL', 'https://www.viteundevis.com/widget/devis.php');

define('SCRAPE_QUERY', "installateur panneau solaire photovoltaique");
define('SCRAPE_API_KEY', '[CLE_API_SEMSCRAPER]');

define('ITEMS_PER_PAGE', 24);
define('NEARBY_CITIES_COUNT', 100);
define('NEARBY_DEPARTMENTS_COUNT', 6);
define('ARTISANS_PER_PAGE', 15);

define('DATA_PATH', __DIR__ . '/data/');
define('REGIONS_FILE', DATA_PATH . 'regions/regions.json');

define('MODELES', [
    ['slug' => 'panneaux-photovoltaiques', 'nom' => 'Panneaux Photovoltaïques', 'emoji' => "☀️", 'vud_cat' => '37'],
    ['slug' => 'tuiles-solaires', 'nom' => 'Tuiles Solaires', 'emoji' => "🏠", 'vud_cat' => '37'],
    ['slug' => 'batterie-solaire', 'nom' => 'Batterie de Stockage', 'emoji' => "🔋", 'vud_cat' => '37'],
    ['slug' => 'kit-autoconsommation', 'nom' => 'Kit Autoconsommation', 'emoji' => "🔄", 'vud_cat' => '37'],
    ['slug' => 'onduleur-solaire', 'nom' => 'Onduleur Solaire', 'emoji' => "🔌", 'vud_cat' => '37'],
    ['slug' => 'entretien-photovoltaique', 'nom' => 'Entretien Photovoltaïque', 'emoji' => "🛠️", 'vud_cat' => '37'],
    ['slug' => 'nettoyage-panneaux', 'nom' => 'Nettoyage Panneaux', 'emoji' => "🧽", 'vud_cat' => '37'],
    ['slug' => 'depannage-solaire', 'nom' => 'Dépannage Solaire', 'emoji' => "🚨", 'vud_cat' => '37'],
    ['slug' => 'solaire-thermique', 'nom' => 'Solaire Thermique', 'emoji' => "🌡️", 'vud_cat' => '37'],
    ['slug' => 'chauffe-eau-solaire', 'nom' => 'Chauffe-eau Solaire', 'emoji' => "🚿", 'vud_cat' => '37'],
    ['slug' => 'aerovoltaique', 'nom' => 'Aérovoltaïque', 'emoji' => "🌬️", 'vud_cat' => '37'],
    ['slug' => 'panneaux-hybrides', 'nom' => 'Panneaux Hybrides', 'emoji' => "⚡", 'vud_cat' => '37'],
    ['slug' => 'tracker-solaire', 'nom' => 'Tracker Solaire', 'emoji' => "🧭", 'vud_cat' => '37'],
    ['slug' => 'ombrelle-solaire', 'nom' => 'Ombrelle Solaire', 'emoji' => "🏖️", 'vud_cat' => '37'],
    ['slug' => 'carport-solaire', 'nom' => 'Carport Solaire', 'emoji' => "🚗", 'vud_cat' => '37'],
    ['slug' => 'centrale-solaire', 'nom' => 'Centrale Solaire', 'emoji' => "🏭", 'vud_cat' => '37'],
    ['slug' => 'revente-surplus', 'nom' => 'Revente Surplus EDF', 'emoji' => "💶", 'vud_cat' => '37'],
    ['slug' => 'micro-onduleur', 'nom' => 'Micro-onduleur', 'emoji' => "🔌", 'vud_cat' => '37'],
    ['slug' => 'audit-energetique', 'nom' => 'Audit Énergétique Solaire', 'emoji' => "📋", 'vud_cat' => '37'],
    ['slug' => 'panneau-solaire-fixe', 'nom' => 'Panneau Solaire Fixe', 'emoji' => "📌", 'vud_cat' => '37'],
    ['slug' => 'panneau-solaire-mobile', 'nom' => 'Panneau Solaire Mobile', 'emoji' => "🚐", 'vud_cat' => '37'],
    ['slug' => 'panneau-solaire-flexible', 'nom' => 'Panneau Solaire Flexible', 'emoji' => "〰️", 'vud_cat' => '37'],
    ['slug' => 'systeme-supervision', 'nom' => 'Système de Supervision', 'emoji' => "👁️", 'vud_cat' => '37'],
    ['slug' => 'pergola-solaire', 'nom' => 'Pergola Solaire', 'emoji' => "⛺", 'vud_cat' => '37'],
    ['slug' => 'pompe-solaire', 'nom' => 'Pompe Solaire', 'emoji' => "💧", 'vud_cat' => '37'],
    ['slug' => 'station-plug-play', 'nom' => 'Station Solaire Plug & Play', 'emoji' => "🔌", 'vud_cat' => '37'],
    ['slug' => 'remplacement-onduleur', 'nom' => 'Remplacement Onduleur', 'emoji' => "🔄", 'vud_cat' => '37'],
    ['slug' => 'mise-aux-normes-solaire', 'nom' => 'Mise aux Normes Solaire', 'emoji' => "✅", 'vud_cat' => '37'],
    ['slug' => 'etude-rentabilite', 'nom' => 'Étude de Rentabilité', 'emoji' => "📈", 'vud_cat' => '37'],
    ['slug' => 'domotique-solaire', 'nom' => 'Domotique Solaire', 'emoji' => "📱", 'vud_cat' => '37'],
]);

define('STYLES', [
    ['slug' => 'panneaux-photovoltaiques', 'nom' => 'Panneaux Photovoltaïques', 'emoji' => "☀️", 'desc' => 'Détails et installation'],
    ['slug' => 'tuiles-solaires', 'nom' => 'Tuiles Solaires', 'emoji' => "🏠", 'desc' => 'Détails et installation'],
    ['slug' => 'batterie-solaire', 'nom' => 'Batterie de Stockage', 'emoji' => "🔋", 'desc' => 'Détails et installation'],
    ['slug' => 'kit-autoconsommation', 'nom' => 'Kit Autoconsommation', 'emoji' => "🔄", 'desc' => 'Détails et installation'],
    ['slug' => 'onduleur-solaire', 'nom' => 'Onduleur Solaire', 'emoji' => "🔌", 'desc' => 'Détails et installation'],
    ['slug' => 'entretien-photovoltaique', 'nom' => 'Entretien Photovoltaïque', 'emoji' => "🛠️", 'desc' => 'Détails et installation'],
    ['slug' => 'nettoyage-panneaux', 'nom' => 'Nettoyage Panneaux', 'emoji' => "🧽", 'desc' => 'Détails et installation'],
    ['slug' => 'depannage-solaire', 'nom' => 'Dépannage Solaire', 'emoji' => "🚨", 'desc' => 'Détails et installation'],
    ['slug' => 'solaire-thermique', 'nom' => 'Solaire Thermique', 'emoji' => "🌡️", 'desc' => 'Détails et installation'],
    ['slug' => 'chauffe-eau-solaire', 'nom' => 'Chauffe-eau Solaire', 'emoji' => "🚿", 'desc' => 'Détails et installation'],
    ['slug' => 'aerovoltaique', 'nom' => 'Aérovoltaïque', 'emoji' => "🌬️", 'desc' => 'Détails et installation'],
    ['slug' => 'panneaux-hybrides', 'nom' => 'Panneaux Hybrides', 'emoji' => "⚡", 'desc' => 'Détails et installation'],
    ['slug' => 'tracker-solaire', 'nom' => 'Tracker Solaire', 'emoji' => "🧭", 'desc' => 'Détails et installation'],
    ['slug' => 'ombrelle-solaire', 'nom' => 'Ombrelle Solaire', 'emoji' => "🏖️", 'desc' => 'Détails et installation'],
    ['slug' => 'carport-solaire', 'nom' => 'Carport Solaire', 'emoji' => "🚗", 'desc' => 'Détails et installation'],
    ['slug' => 'centrale-solaire', 'nom' => 'Centrale Solaire', 'emoji' => "🏭", 'desc' => 'Détails et installation'],
    ['slug' => 'revente-surplus', 'nom' => 'Revente Surplus EDF', 'emoji' => "💶", 'desc' => 'Détails et installation'],
    ['slug' => 'micro-onduleur', 'nom' => 'Micro-onduleur', 'emoji' => "🔌", 'desc' => 'Détails et installation'],
    ['slug' => 'audit-energetique', 'nom' => 'Audit Énergétique Solaire', 'emoji' => "📋", 'desc' => 'Détails et installation'],
    ['slug' => 'panneau-solaire-fixe', 'nom' => 'Panneau Solaire Fixe', 'emoji' => "📌", 'desc' => 'Détails et installation'],
    ['slug' => 'panneau-solaire-mobile', 'nom' => 'Panneau Solaire Mobile', 'emoji' => "🚐", 'desc' => 'Détails et installation'],
    ['slug' => 'panneau-solaire-flexible', 'nom' => 'Panneau Solaire Flexible', 'emoji' => "〰️", 'desc' => 'Détails et installation'],
    ['slug' => 'systeme-supervision', 'nom' => 'Système de Supervision', 'emoji' => "👁️", 'desc' => 'Détails et installation'],
    ['slug' => 'pergola-solaire', 'nom' => 'Pergola Solaire', 'emoji' => "⛺", 'desc' => 'Détails et installation'],
    ['slug' => 'pompe-solaire', 'nom' => 'Pompe Solaire', 'emoji' => "💧", 'desc' => 'Détails et installation'],
    ['slug' => 'station-plug-play', 'nom' => 'Station Solaire Plug & Play', 'emoji' => "🔌", 'desc' => 'Détails et installation'],
    ['slug' => 'remplacement-onduleur', 'nom' => 'Remplacement Onduleur', 'emoji' => "🔄", 'desc' => 'Détails et installation'],
    ['slug' => 'mise-aux-normes-solaire', 'nom' => 'Mise aux Normes Solaire', 'emoji' => "✅", 'desc' => 'Détails et installation'],
    ['slug' => 'etude-rentabilite', 'nom' => 'Étude de Rentabilité', 'emoji' => "📈", 'desc' => 'Détails et installation'],
    ['slug' => 'domotique-solaire', 'nom' => 'Domotique Solaire', 'emoji' => "📱", 'desc' => 'Détails et installation'],
]);

define('SERVICES', [
    [
        'titre' => "Étude & Installation",
        'icon' => "☀️",
        'desc' => "Étude d'ensoleillement et dimensionnement parfait de votre installation par des professionnels certifiés.",
        'points' => ["Artisans qualifiés RGE QualiPV", "Estimation de productible offerte", "Matériel de grandes marques"]
    ],
    [
        'titre' => "Autoconsommation",
        'icon' => "🔌",
        'desc' => "Consommez votre propre énergie, devenez indépendant face aux hausses tarifaires et revendez le surplus.",
        'points' => ["Revente du surplus à EDF OA", "Système de supervision en temps réel", "Onduleurs et micro-onduleurs"]
    ],
    [
        'titre' => "Aides Financières (Prime)",
        'icon' => "💰",
        'desc' => "Jusqu'à plusieurs milliers d'euros d'aides de l'État grâce à la prime à l'autoconsommation.",
        'points' => ["Prime répartie sur 5 ans", "Gestion de l'administratif (Mairie, Enedis)", "Taux de TVA réduit (selon puissance)"]
    ],
]);

define('FAQ_ACCUEIL', [
    [
        'question' => "Qu'est-ce que l'autoconsommation avec revente de surplus ?",
        'reponse' => "C'est le fonctionnement le plus courant ! Vos panneaux produisent de l'électricité que vous consommez en priorité. Si vous en produisez trop, l'excédent (le surplus) est injecté sur le réseau public et EDF Obligation d'Achat vous le rachète à un prix fixé par l'État pour une durée de 20 ans."
    ],
    [
        'question' => "C'est quoi la prime à l'autoconsommation ?",
        'reponse' => "C'est une prime versée par l'État (répartie souvent avec les premières factures de revente) pour encourager l'installation de panneaux. Elle dépend de la puissance de l'installation (par exemple, autour de 1110€ ou plus pour une installation standard de 3 kWc, les montants évoluant chaque trimestre)."
    ],
    [
        'question' => "Pourquoi est-il crucial de choisir un installateur RGE ?",
        'reponse' => "Le label RGE (Reconnu Garant de l'Environnement), et particulièrement 'QualiPV', est une condition sine qua non pour toucher la Prime à l'autoconsommation ET pour pouvoir signer un contrat de rachat de votre surplus avec EDF OA."
    ],
    [
        'question' => "Combien de panneaux faut-il pour une maison ?",
        'reponse' => "Tout dépend de votre consommation électrique (chauffage électrique, piscine, voiture électrique...). Une maison standard opte souvent pour une installation de 3 kWc, ce qui représente environ 8 à 10 panneaux. Une étude sérieuse est toujours nécessaire pour dimensionner correctement l'installation."
    ],
    [
        'question' => "Les panneaux solaires sont-ils rentables sans le soleil du sud ?",
        'reponse' => "Absolument ! Les panneaux photovoltaïques modernes fonctionnent grâce à la luminosité, pas seulement la chaleur. Le nord de la France bénéficie de rendements très intéressants qui se rapprochent de ceux des régions méridionales."
    ]
]);

define('TOP_VILLES', [
    ['nom' => 'Paris', 'slug' => 'paris', 'cp' => '75000', 'region' => 'ile-de-france', 'dept' => 'paris'],
    ['nom' => 'Marseille', 'slug' => 'marseille', 'cp' => '13000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'bouches-du-rhone'],
    ['nom' => 'Lyon', 'slug' => 'lyon', 'cp' => '69000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'rhone'],
    ['nom' => 'Toulouse', 'slug' => 'toulouse', 'cp' => '31100', 'region' => 'occitanie', 'dept' => 'haute-garonne'],
    ['nom' => 'Nice', 'slug' => 'nice', 'cp' => '06000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'alpes-maritimes'],
    ['nom' => 'Nantes', 'slug' => 'nantes', 'cp' => '44200', 'region' => 'pays-de-la-loire', 'dept' => 'loire-atlantique'],
    ['nom' => 'Montpellier', 'slug' => 'montpellier', 'cp' => '34080', 'region' => 'occitanie', 'dept' => 'herault'],
    ['nom' => 'Bordeaux', 'slug' => 'bordeaux', 'cp' => '33300', 'region' => 'nouvelle-aquitaine', 'dept' => 'gironde'],
    ['nom' => 'Lille', 'slug' => 'lille', 'cp' => '59260', 'region' => 'hauts-de-france', 'dept' => 'nord'],
    ['nom' => 'Strasbourg', 'slug' => 'strasbourg', 'cp' => '67000', 'region' => 'grand-est', 'dept' => 'bas-rhin'],
    ['nom' => 'Rennes', 'slug' => 'rennes', 'cp' => '35700', 'region' => 'bretagne', 'dept' => 'ille-et-vilaine'],
    ['nom' => 'Toulon', 'slug' => 'toulon', 'cp' => '83000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'var'],
    ['nom' => 'Grenoble', 'slug' => 'grenoble', 'cp' => '38000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'isere'],
    ['nom' => 'Dijon', 'slug' => 'dijon', 'cp' => '21000', 'region' => 'bourgogne-franche-comte', 'dept' => 'cote-d-or'],
    ['nom' => 'Angers', 'slug' => 'angers', 'cp' => '49000', 'region' => 'pays-de-la-loire', 'dept' => 'maine-et-loire'],
    ['nom' => 'Nimes', 'slug' => 'nimes', 'cp' => '30000', 'region' => 'occitanie', 'dept' => 'gard'],
    ['nom' => 'Clermont-Ferrand', 'slug' => 'clermont-ferrand', 'cp' => '63000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'puy-de-dome'],
    ['nom' => 'Le Havre', 'slug' => 'le-havre', 'cp' => '76600', 'region' => 'normandie', 'dept' => 'seine-maritime'],
]);

define('AVANTAGES', [
    ['titre' => 'Réseau National', 'desc' => 'Des milliers de professionnels référencés dans toute la France.', 'icon' => "🗺️"],
    ['titre' => 'Partenaires Expérimentés', 'desc' => 'Trouvez le bon interlocuteur pour la réussite de votre projet', 'icon' => "✅"],
    ['titre' => 'Mise en Relation Rapide', 'desc' => 'Obtenez gratuitement des devis adaptés à vos besoins.', 'icon' => "💰"],
]);

define('HERO_IMAGE', 'https://images.unsplash.com/photo-1509391366360-2e959784a276?w=1920&q=80&auto=format&fit=crop');
define('MODELE_IMAGE', 'https://images.unsplash.com/photo-1559302504-64aae6ca6b6f?w=1920&q=80&auto=format&fit=crop');


function getModeleBySlug($slug)
{
    foreach (MODELES as $modele) {
        if ($modele['slug'] === $slug) {
            return $modele;
        }
    }
    return null;
}

function getAllModeles()
{
    return MODELES;
}

function getVudUrl($modele = null)
{
    $catId = VUD_CATEGORIE_ID;
    if ($modele && isset($modele['vud_cat'])) {
        $catId = $modele['vud_cat'];
    }
    return 'https://www.viteundevis.com/in/?pid=' . VUD_PARTENAIRE_ID . '&c=' . $catId;
}

function getVudCatForModele($modele = null)
{
    if ($modele && isset($modele['vud_cat'])) {
        return $modele['vud_cat'];
    }
    return VUD_CATEGORIE_ID;
}
