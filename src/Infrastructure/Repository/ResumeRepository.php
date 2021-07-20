<?php

namespace App\Infrastructure\Repository;

use DateTime;
use App\Infrastructure\Interfaces\InfoResumeRepository as InfoResumeInterface;

class ResumeRepository implements InfoResumeInterface
{
    /**
     * @return array[]
     */
    public function findResumes(): array
    {


        return [
            [
                'poste' => 'Développeur PHP',
                'entreprise' => 'Alptis',
                'dateDebut' => new DateTime('2019-10-01'),
                'dateFin' => null,
                'descriptif' => [
                    'Maintenance des applications web du groupe',
                    'Développement de nouvelles fonctionnalités sur l’espace adhérents',
                    'Intégration des tests unitaires',
                    'Optimisation du code',
                    'Analyse des demandes (tickets) reçus',
                    'Recherche des éventuelles problèmes au sein de l\'application',
                    'Debug de l\'application ou redirection du ticket vers un autre service',
                    'Mise en recette des évolutions sur GitHub',
                ],
                'environnement' => [
                    'PHP', 'Symfony 3 et 4', 'Copix', 'VueJs', 'MySQL', 'Mongodb', 'Docker', 'API', 'PHPunit', 'Atoum', 'webservices', 'Redmine', 'Méthode KAMPAN', 'jQuery', 'Oracle Database', 'GIT'
                ]
            ],
            [
                'poste' => 'Développeur PHP',
                'entreprise' => 'SFR',
                'dateDebut' => new DateTime('2019-01-01'),
                'dateFin' => new DateTime('2019-09-30'),
                'descriptif' => [
                    'Développement d’une fonctionnalité pour l’audit des radios du parc SFR',
                    'Mise à jour du code pour la détection de doublons IP',
                    'Conception de la base de données par l’importation de données brutes puis l’analyse de ces données afin de détecter les relations entre elles',
                    'Création des scripts d’importation des fichiers brutes et des scripts d’importation en base',
                    'Mise en place de la Crontab pour ces scripts et des logs',
                    'Mise en place de l’affichage graphique avec vis.js du «bout en bout» de la SDH en indiquant les différents équipements sur le parcours (OSN, FH, LLFT, CPE, LTS)',
                    'Affichage des OSN de sorties des LTS par recherche unitaire',
                    'Modifications ponctuelles de l’interface graphique de l\'application interne',
                    'Mise à jour de fonctionnalités sur une application d\'adressage IP sous Symfony',
                ],
                'environnement' => [
                    'PHP 7', 'Architecture MVC', 'Symfony', 'SQL', 'Bootstrap', 'Vis.js', 'XAMP', 'Putty', 'WinMerge'
                ]
            ],
            [
                'poste' => 'Développeur PHP',
                'entreprise' => 'Interpol',
                'dateDebut' => new DateTime('2018-11-01'),
                'dateFin' => new DateTime('2018-12-31'),
                'descriptif' => [
                    'Acquisition des connaissances sur l’architecture PHP/Symfony du projet',
                    'Développement de nouvelles fonctionnalités sur la partie backend',
                    'Réalisation de la documentation du projet'
                ],
                'environnement' => [
                    'PHP 7', 'Symfony 3', 'JAVA 8', 'Spring Boot 5', 'Angular', 'API RESTFUL', 'VM Xubuntu', 'bitbucket'
                ]
            ]
        ];
    }

    /**
     * @return array[]
     */
    public function findSkills(): array
    {
        return [
            [
                'techno' => 'PHP',
                'level' => 90,
            ],
            [
                'techno' => 'Javascript',
                'level' => 60,
            ],            [
                'techno' => 'Symfony',
                'level' => 80,
            ],
            [
                'techno' => 'HTML/CSS',
                'level' => 80,
            ],            [
                'techno' => 'Bootstrap',
                'level' => 70,
            ],
            [
                'techno' => 'VueJS',
                'level' => 40,
            ],
            [
                'techno' => 'Mysql',
                'level' => 80,
            ],
            [
                'techno' => 'MongoDB',
                'level' => 60,
            ],
            [
                'techno' => 'Docker',
                'level' => 70,
            ],
            [
                'techno' => 'GIT',
                'level' => 80,
            ],
        ];
    }

    /**
     * @return array[]
     */
    public function findPresentation(): array
    {
        return [
            'description' => "
               <p>
                    Je suis <b>Aurélien</b>, développeur originaire du Haut Beaujolais qui s'est installé sur <b>Lyon</b>
                    après parcouru la France à travers les études.
                </p>
                <p>
                    Suite à des études en <b>Commerce et Management</b>j'ai décidé de m'orienter dans le <b>Développement Web</b>
                    afin d'exercer un métier qui m'offre une <b>liberté de création et d'apprentissage illimitée!</b>
                </p>
                <p>
                    <b>Ma persévérance, ma rigueur, ma curiosité</b> m'ont permis de <b>réussir cette reconversion</b> et de
                    <b>décrocher des missions</b> auprès des clients de la société de services
                    <b><a href=\"https://astekgroup.fr/\" target=\"_blank\">Astek</a></b>.
                </p>
            ",
            'job' => 'Developpeur Web et Web Mobile PHP',
            'mobilite' => 'Région Lyonnaise',
            'langues' => [
                'Anglais : Technique',
                'Espagnol : Bon',
            ],
            'email' => 'aurelien.roche1@laposte.net',
            'poste' => 'Consultant ASTEK',
            'hobbies' => [
                'Course à pied',
                'Cross-fit',
                'Patisserie',
                'Films/Series'
            ],
            'image' => null,
            'wordsDescriptif' => ['Développeur PHP', 'Bosseur', 'Runner', 'Fan de Chocolat :)']
        ];
    }
}