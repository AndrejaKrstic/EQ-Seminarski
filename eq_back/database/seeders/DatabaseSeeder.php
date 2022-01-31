<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Language;
use App\Models\Word;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $language = Language::create([
            'naziv'=>'nemacki',
        ]);

        Course::create([
            'nivo'=>'A1.1',
            'nivo_reci'=>8,
            'jezik_id'=>$language->id
        ]);

        Word::create([
            'rec' => 'sein',
            'vrsta_reci' => 'glagol',
            'prevod' => 'biti',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '1',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'kommen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'dolaziti',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '1',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'aus',
            'vrsta_reci' => 'predlog',
            'prevod' => 'iz',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '1',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'wohnen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'stanovati',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '1',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'heißen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'zvati se',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '1',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'wer',
            'vrsta_reci' => 'zamenica',
            'prevod' => 'ko',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '1',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'was',
            'vrsta_reci' => 'zamenica',
            'prevod' => 'šta',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '1',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'wie',
            'vrsta_reci' => 'prilog',
            'prevod' => 'kako',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '1',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'wo',
            'vrsta_reci' => 'predlog',
            'prevod' => 'gde',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '1',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'woher',
            'vrsta_reci' => 'predlog',
            'prevod' => 'odakle',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '1',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'tschüs',
            'vrsta_reci' => 'uzvik',
            'prevod' => 'ćao',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '1',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Name',
            'vrsta_reci' => 'imenica',
            'prevod' => 'ime',
            'rod' => 'der',
            'mnozina' => 'Namen',
            'nivo' => '1',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Frau',
            'vrsta_reci' => 'imenica',
            'prevod' => 'gospođa',
            'rod' => 'die',
            'mnozina' => 'Frauen',
            'nivo' => '1',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Herr',
            'vrsta_reci' => 'imenica',
            'prevod' => 'gospodin',
            'rod' => 'der',
            'mnozina' => 'Herren',
            'nivo' => '1',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Vorname',
            'vrsta_reci' => 'imenica',
            'prevod' => 'prezime',
            'rod' => 'der',
            'mnozina' => 'Vornamen',
            'nivo' => '1',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Familienname',
            'vrsta_reci' => 'imenica',
            'prevod' => 'prezime',
            'rod' => 'der',
            'mnozina' => 'Familiennamen',
            'nivo' => '1',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Land',
            'vrsta_reci' => 'imenica',
            'prevod' => 'država',
            'rod' => 'das',
            'mnozina' => 'Länder',
            'nivo' => '1',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'auch',
            'vrsta_reci' => 'prilog',
            'prevod' => 'takođe',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '1',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'und',
            'vrsta_reci' => 'veznik',
            'prevod' => 'i',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '1',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'sehr',
            'vrsta_reci' => 'prilog',
            'prevod' => 'vrlo',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '1',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'gut',
            'vrsta_reci' => 'pridev',
            'prevod' => 'dobro',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '1',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'leben',
            'vrsta_reci' => 'glagol',
            'prevod' => 'živeti',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '1',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Arbeit',
            'vrsta_reci' => 'imenica',
            'prevod' => 'posao',
            'rod' => 'die',
            'mnozina' => 'Arbeiten',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Arbeitgeber',
            'vrsta_reci' => 'imenica',
            'prevod' => 'poslodavac',
            'rod' => 'der',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'arbeiten',
            'vrsta_reci' => 'glagol',
            'prevod' => 'raditi',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Beruf',
            'vrsta_reci' => 'imenica',
            'prevod' => 'zanimanje',
            'rod' => 'der',
            'mnozina' => 'Berufe',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Schule',
            'vrsta_reci' => 'imenica',
            'prevod' => 'škola',
            'rod' => 'die',
            'mnozina' => 'Schulen',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Hochschule',
            'vrsta_reci' => 'imenica',
            'prevod' => 'visoka škola',
            'rod' => 'die',
            'mnozina' => 'Hochschulen',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Universität',
            'vrsta_reci' => 'imenica',
            'prevod' => 'univerzitet',
            'rod' => 'die',
            'mnozina' => 'Universitäten',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Job',
            'vrsta_reci' => 'imenica',
            'prevod' => 'posao',
            'rod' => 'der',
            'mnozina' => 'Jobs',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Ausbildung',
            'vrsta_reci' => 'imenica',
            'prevod' => 'obrazovanje',
            'rod' => 'die',
            'mnozina' => 'Ausbildungen',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Stelle',
            'vrsta_reci' => 'imenica',
            'prevod' => 'radno mesto',
            'rod' => 'die',
            'mnozina' => 'Stellen',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Praktikum',
            'vrsta_reci' => 'imenica',
            'prevod' => 'praksa',
            'rod' => 'das',
            'mnozina' => 'Praktika',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'arbeitslos',
            'vrsta_reci' => 'pridev',
            'prevod' => 'nezaposlen',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Architekt',
            'vrsta_reci' => 'imenica',
            'prevod' => 'arhitekta',
            'rod' => 'der',
            'mnozina' => 'Architekten',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Architektin',
            'vrsta_reci' => 'imenica',
            'prevod' => 'arhitektkinja',
            'rod' => 'die',
            'mnozina' => 'Architektinnen',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Arzt',
            'vrsta_reci' => 'imenica',
            'prevod' => 'lekar',
            'rod' => 'der',
            'mnozina' => 'Ärzte',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Ärztin',
            'vrsta_reci' => 'imenica',
            'prevod' => 'lekarka',
            'rod' => 'die',
            'mnozina' => 'Ärztinnen',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Friseur',
            'vrsta_reci' => 'imenica',
            'prevod' => 'frizer',
            'rod' => 'der',
            'mnozina' => 'Friseure',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Friseurin',
            'vrsta_reci' => 'imenica',
            'prevod' => 'frizerka',
            'rod' => 'die',
            'mnozina' => 'Friseurinnen',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Ingenieur',
            'vrsta_reci' => 'imenica',
            'prevod' => 'inženjer',
            'rod' => 'der',
            'mnozina' => 'Ingenieure',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Ingenieurin',
            'vrsta_reci' => 'imenica',
            'prevod' => 'inženjerka',
            'rod' => 'die',
            'mnozina' => 'Ingenieurinnen',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Journalist',
            'vrsta_reci' => 'imenica',
            'prevod' => 'novinar',
            'rod' => 'der',
            'mnozina' => 'Journalisten',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Journalistin',
            'vrsta_reci' => 'imenica',
            'prevod' => 'novinarka',
            'rod' => 'die',
            'mnozina' => 'Journalistinnen',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Kellner',
            'vrsta_reci' => 'imenica',
            'prevod' => 'konobar',
            'rod' => 'der',
            'mnozina' => 'Kellner',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Kellnerin',
            'vrsta_reci' => 'imenica',
            'prevod' => 'konobarica',
            'rod' => 'die',
            'mnozina' => 'Kellnerinnen',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Krankenschwester',
            'vrsta_reci' => 'imenica',
            'prevod' => 'medicinksa sestra',
            'rod' => 'die',
            'mnozina' => 'Krankenschwestern',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Lehrer',
            'vrsta_reci' => 'imenica',
            'prevod' => 'nastavnik',
            'rod' => 'der',
            'mnozina' => 'Lehrer',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Lehrerin',
            'vrsta_reci' => 'imenica',
            'prevod' => 'nastavnica',
            'rod' => 'die',
            'mnozina' => 'Lehrerinnen',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Mechatroniker',
            'vrsta_reci' => 'imenica',
            'prevod' => 'mehaničar',
            'rod' => 'der',
            'mnozina' => 'Mechatroniker',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Student',
            'vrsta_reci' => 'imenica',
            'prevod' => 'student',
            'rod' => 'der',
            'mnozina' => 'Studenten',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Studentin',
            'vrsta_reci' => 'imenica',
            'prevod' => 'studentkinja',
            'rod' => 'die',
            'mnozina' => 'Studentinnen',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Schauspieler',
            'vrsta_reci' => 'imenica',
            'prevod' => 'glumac',
            'rod' => 'der',
            'mnozina' => 'Schauspieler',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Schauspielerin',
            'vrsta_reci' => 'imenica',
            'prevod' => 'glumica',
            'rod' => 'die',
            'mnozina' => 'Schauspielerinnen',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Schüler',
            'vrsta_reci' => 'imenica',
            'prevod' => 'učenik',
            'rod' => 'der',
            'mnozina' => 'Schüler',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Schülerin',
            'vrsta_reci' => 'imenica',
            'prevod' => 'učenica',
            'rod' => 'die',
            'mnozina' => 'Schülerinnen',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Sekretär',
            'vrsta_reci' => 'imenica',
            'prevod' => 'sekretar',
            'rod' => 'der',
            'mnozina' => 'Sekretäre',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Sekretärin',
            'vrsta_reci' => 'imenica',
            'prevod' => 'sekretarica',
            'rod' => 'die',
            'mnozina' => 'Sekretärinnen',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Verkäufer',
            'vrsta_reci' => 'imenica',
            'prevod' => 'prodavac',
            'rod' => 'der',
            'mnozina' => 'Verkäufer',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Verkäuferin',
            'vrsta_reci' => 'imenica',
            'prevod' => 'prodavačica',
            'rod' => 'die',
            'mnozina' => 'Verkäuferinnen',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Historiker',
            'vrsta_reci' => 'imenica',
            'prevod' => 'istoričar',
            'rod' => 'der',
            'mnozina' => 'Historiker',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Historikerin',
            'vrsta_reci' => 'imenica',
            'prevod' => 'istoričarka',
            'rod' => 'die',
            'mnozina' => 'Historikerinnen',
            'nivo' => '2',
            'tag1' => 'zanimanje',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Alter',
            'vrsta_reci' => 'imenica',
            'prevod' => 'starost',
            'rod' => 'das',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Jahr',
            'vrsta_reci' => 'imenica',
            'prevod' => 'godina',
            'rod' => 'das',
            'mnozina' => 'Jahre',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Kind',
            'vrsta_reci' => 'imenica',
            'prevod' => 'dete',
            'rod' => 'das',
            'mnozina' => 'Kinder',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'zusammenleben',
            'vrsta_reci' => 'galgol',
            'prevod' => 'živeti zajedno',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'geschieden',
            'vrsta_reci' => 'galgol',
            'prevod' => 'razveden/na',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'verheiratet',
            'vrsta_reci' => 'galgol',
            'prevod' => 'oženjen/udata',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'glauben',
            'vrsta_reci' => 'galgol',
            'prevod' => 'verovati',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'machen',
            'vrsta_reci' => 'galgol',
            'prevod' => 'raditi',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'haben',
            'vrsta_reci' => 'galgol',
            'prevod' => 'imati',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'richtig',
            'vrsta_reci' => 'pridev',
            'prevod' => 'tačno',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'falsch',
            'vrsta_reci' => 'pridev',
            'prevod' => 'netačno',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'aber',
            'vrsta_reci' => 'veznik',
            'prevod' => 'ali',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'oder',
            'vrsta_reci' => 'veznik',
            'prevod' => 'ili',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'meinen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'misliti',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'wohin',
            'vrsta_reci' => 'predlog',
            'prevod' => 'kuda',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'schon',
            'vrsta_reci' => 'rečca',
            'prevod' => 'već',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'schön',
            'vrsta_reci' => 'pridev',
            'prevod' => 'lepo',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'null',
            'vrsta_reci' => 'broj',
            'prevod' => 'nula',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'eins',
            'vrsta_reci' => 'broj',
            'prevod' => 'jedan',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'zwei',
            'vrsta_reci' => 'broj',
            'prevod' => 'dva',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'drei',
            'vrsta_reci' => 'broj',
            'prevod' => 'tri',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'vier',
            'vrsta_reci' => 'broj',
            'prevod' => 'četiri',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'fünf',
            'vrsta_reci' => 'broj',
            'prevod' => 'pet',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'sechs',
            'vrsta_reci' => 'broj',
            'prevod' => 'šest',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'sieben',
            'vrsta_reci' => 'broj',
            'prevod' => 'sedam',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'acht',
            'vrsta_reci' => 'broj',
            'prevod' => 'osam',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'neun',
            'vrsta_reci' => 'broj',
            'prevod' => 'devet',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'zehn',
            'vrsta_reci' => 'broj',
            'prevod' => 'deset',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'elf',
            'vrsta_reci' => 'broj',
            'prevod' => 'jedanaest',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'zwölf',
            'vrsta_reci' => 'broj',
            'prevod' => 'dvanaest',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'dreizehn',
            'vrsta_reci' => 'broj',
            'prevod' => 'trinaest',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'vierzehn',
            'vrsta_reci' => 'broj',
            'prevod' => 'četrnaest',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'fünfzehn',
            'vrsta_reci' => 'broj',
            'prevod' => 'petnaest',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'sechzehn',
            'vrsta_reci' => 'broj',
            'prevod' => 'šestnaest',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'siebzehn',
            'vrsta_reci' => 'broj',
            'prevod' => 'sedamnaest',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'achtzehn',
            'vrsta_reci' => 'broj',
            'prevod' => 'osamnaest',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'neunzehn',
            'vrsta_reci' => 'broj',
            'prevod' => 'devetnaest',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'zwanzig',
            'vrsta_reci' => 'broj',
            'prevod' => 'dvadeset',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'dreißig',
            'vrsta_reci' => 'broj',
            'prevod' => 'trideset',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'vierzig',
            'vrsta_reci' => 'broj',
            'prevod' => 'četrdeset',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'fünfzig',
            'vrsta_reci' => 'broj',
            'prevod' => 'pedeset',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'sechzig',
            'vrsta_reci' => 'broj',
            'prevod' => 'šezdeset',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'siebzig',
            'vrsta_reci' => 'broj',
            'prevod' => 'sedamdeset',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'achtzig',
            'vrsta_reci' => 'broj',
            'prevod' => 'osamdeset',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'neunzig',
            'vrsta_reci' => 'broj',
            'prevod' => 'devedeset',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'ein hundert',
            'vrsta_reci' => 'broj',
            'prevod' => 'sto',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '2',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Familie',
            'vrsta_reci' => 'imenica',
            'prevod' => 'porodica',
            'rod' => 'die',
            'mnozina' => 'Familien',
            'nivo' => '3',
            'tag1' => 'porodica',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Vater',
            'vrsta_reci' => 'imenica',
            'prevod' => 'otac',
            'rod' => 'der',
            'mnozina' => 'Väter',
            'nivo' => '3',
            'tag1' => 'porodica',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Mutter',
            'vrsta_reci' => 'imenica',
            'prevod' => 'majka',
            'rod' => 'die',
            'mnozina' => 'Mütter',
            'nivo' => '3',
            'tag1' => 'porodica',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Eltern ',
            'vrsta_reci' => 'imenica',
            'prevod' => 'roditelji',
            'rod' => 'die',
            'mnozina' => '',
            'nivo' => '3',
            'tag1' => 'porodica',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Sohn',
            'vrsta_reci' => 'imenica',
            'prevod' => 'sin',
            'rod' => 'der',
            'mnozina' => 'Söhne',
            'nivo' => '3',
            'tag1' => 'porodica',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Tochter',
            'vrsta_reci' => 'imenica',
            'prevod' => 'ćerka',
            'rod' => 'die',
            'mnozina' => 'Töchter',
            'nivo' => '3',
            'tag1' => 'porodica',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Großvater',
            'vrsta_reci' => 'imenica',
            'prevod' => 'deda',
            'rod' => 'der',
            'mnozina' => 'Großväter',
            'nivo' => '3',
            'tag1' => 'porodica',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Großmutter',
            'vrsta_reci' => 'imenica',
            'prevod' => 'baba',
            'rod' => 'die',
            'mnozina' => 'Großmütter',
            'nivo' => '3',
            'tag1' => 'porodica',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Opa',
            'vrsta_reci' => 'imenica',
            'prevod' => 'deka',
            'rod' => 'der',
            'mnozina' => 'Opas',
            'nivo' => '3',
            'tag1' => 'porodica',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Oma',
            'vrsta_reci' => 'imenica',
            'prevod' => 'baka',
            'rod' => 'die',
            'mnozina' => 'Omas',
            'nivo' => '3',
            'tag1' => 'porodica',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Großeltern ',
            'vrsta_reci' => 'imenica',
            'prevod' => 'baba i deda',
            'rod' => 'die',
            'mnozina' => '',
            'nivo' => '3',
            'tag1' => 'porodica',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Enkel',
            'vrsta_reci' => 'imenica',
            'prevod' => 'unuk',
            'rod' => 'der',
            'mnozina' => 'Enkel',
            'nivo' => '3',
            'tag1' => 'porodica',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Enkelin',
            'vrsta_reci' => 'imenica',
            'prevod' => 'unuka',
            'rod' => 'die',
            'mnozina' => 'Enkelinnen',
            'nivo' => '3',
            'tag1' => 'porodica',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Bruder',
            'vrsta_reci' => 'imenica',
            'prevod' => 'brat',
            'rod' => 'der',
            'mnozina' => 'Brüder',
            'nivo' => '3',
            'tag1' => 'porodica',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Schwester',
            'vrsta_reci' => 'imenica',
            'prevod' => 'sestra',
            'rod' => 'die',
            'mnozina' => 'Schwestern',
            'nivo' => '3',
            'tag1' => 'porodica',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Geschwister  ',
            'vrsta_reci' => 'imenica',
            'prevod' => 'braća i sestre',
            'rod' => 'die',
            'mnozina' => '',
            'nivo' => '3',
            'tag1' => 'porodica',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Mann',
            'vrsta_reci' => 'imenica',
            'prevod' => 'muškarac',
            'rod' => 'der',
            'mnozina' => 'Männer',
            'nivo' => '3',
            'tag1' => 'porodica',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Ehemann',
            'vrsta_reci' => 'imenica',
            'prevod' => 'suprug',
            'rod' => 'der',
            'mnozina' => '',
            'nivo' => '3',
            'tag1' => 'porodica',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Ehefrau',
            'vrsta_reci' => 'imenica',
            'prevod' => 'supruga',
            'rod' => 'die',
            'mnozina' => '',
            'nivo' => '3',
            'tag1' => 'porodica',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Ehe',
            'vrsta_reci' => 'imenica',
            'prevod' => 'brak',
            'rod' => 'die',
            'mnozina' => 'Ehen',
            'nivo' => '3',
            'tag1' => 'porodica',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Sprache',
            'vrsta_reci' => 'imenica',
            'prevod' => 'jezik',
            'rod' => 'die',
            'mnozina' => 'Sprachen',
            'nivo' => '3',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'sprechen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'govoriti',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '3',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Freund',
            'vrsta_reci' => 'imenica',
            'prevod' => 'prijatelj',
            'rod' => 'der',
            'mnozina' => 'Freunde',
            'nivo' => '3',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Freundin',
            'vrsta_reci' => 'imenica',
            'prevod' => 'prijateljica',
            'rod' => 'die',
            'mnozina' => 'Freundinnen',
            'nivo' => '3',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Kollege',
            'vrsta_reci' => 'imenica',
            'prevod' => 'kolega',
            'rod' => 'der',
            'mnozina' => 'Kollegen',
            'nivo' => '3',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Kollegin',
            'vrsta_reci' => 'imenica',
            'prevod' => 'koleginica',
            'rod' => 'die',
            'mnozina' => 'Kolleginnen',
            'nivo' => '3',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Partner',
            'vrsta_reci' => 'imenica',
            'prevod' => 'partner',
            'rod' => 'der',
            'mnozina' => 'Partner',
            'nivo' => '3',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Partnerin',
            'vrsta_reci' => 'imenica',
            'prevod' => 'partnerka',
            'rod' => 'die',
            'mnozina' => 'Partnerinnen',
            'nivo' => '3',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'bitte',
            'vrsta_reci' => 'rečca',
            'prevod' => 'molim te',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '3',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'genau',
            'vrsta_reci' => 'rečca',
            'prevod' => 'naravno',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '3',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'mein ',
            'vrsta_reci' => 'zamenica',
            'prevod' => 'moj',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '3',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'meinen',
            'vrsta_reci' => 'zamenica',
            'prevod' => 'moja/moje',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '3',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'dein',
            'vrsta_reci' => 'zamenica',
            'prevod' => 'tvoj',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '3',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'deine',
            'vrsta_reci' => 'zamenica',
            'prevod' => 'tvoja/tvoje',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '3',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Möbel  ',
            'vrsta_reci' => 'imenica',
            'prevod' => 'nameštaj',
            'rod' => 'die',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => 'namestaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Bett',
            'vrsta_reci' => 'imenica',
            'prevod' => 'krevet',
            'rod' => 'das',
            'mnozina' => 'Betten',
            'nivo' => '4',
            'tag1' => 'namestaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Lampe',
            'vrsta_reci' => 'imenica',
            'prevod' => 'lampa',
            'rod' => 'die',
            'mnozina' => 'Lampen',
            'nivo' => '4',
            'tag1' => 'namestaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Bild',
            'vrsta_reci' => 'imenica',
            'prevod' => 'slika',
            'rod' => 'das',
            'mnozina' => 'Bilder',
            'nivo' => '3',
            'tag1' => 'namestaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Schrank',
            'vrsta_reci' => 'imenica',
            'prevod' => 'ormar',
            'rod' => 'der',
            'mnozina' => 'Schränke',
            'nivo' => '4',
            'tag1' => 'namestaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Sessel',
            'vrsta_reci' => 'imenica',
            'prevod' => 'fotelja',
            'rod' => 'der',
            'mnozina' => 'Sessel',
            'nivo' => '4',
            'tag1' => 'namestaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Sofa',
            'vrsta_reci' => 'imenica',
            'prevod' => 'sofa',
            'rod' => 'das',
            'mnozina' => 'Sofas',
            'nivo' => '4',
            'tag1' => 'namestaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Couch',
            'vrsta_reci' => 'imenica',
            'prevod' => 'kauč',
            'rod' => 'die',
            'mnozina' => 'Couchen',
            'nivo' => '4',
            'tag1' => 'namestaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Stuhl',
            'vrsta_reci' => 'imenica',
            'prevod' => 'stolica',
            'rod' => 'der',
            'mnozina' => 'Stühle',
            'nivo' => '4',
            'tag1' => 'namestaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Teppich',
            'vrsta_reci' => 'imenica',
            'prevod' => 'tepih',
            'rod' => 'der',
            'mnozina' => 'Teppiche',
            'nivo' => '4',
            'tag1' => 'namestaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Tisch',
            'vrsta_reci' => 'imenica',
            'prevod' => 'sto',
            'rod' => 'der',
            'mnozina' => 'Tische',
            'nivo' => '4',
            'tag1' => 'namestaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'groß',
            'vrsta_reci' => 'pridev',
            'prevod' => 'veliko',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'klein',
            'vrsta_reci' => 'pridev',
            'prevod' => 'malo',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'hässlich',
            'vrsta_reci' => 'pridev',
            'prevod' => 'ružno',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'kurz',
            'vrsta_reci' => 'pridev',
            'prevod' => 'kratko',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'lang',
            'vrsta_reci' => 'pridev',
            'prevod' => 'dugačko',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'schlecht',
            'vrsta_reci' => 'pridev',
            'prevod' => 'loše',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'teuer',
            'vrsta_reci' => 'pridev',
            'prevod' => 'skupo',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'billig',
            'vrsta_reci' => 'pridev',
            'prevod' => 'jeftino',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'leicht',
            'vrsta_reci' => 'pridev',
            'prevod' => 'lako',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'schwer',
            'vrsta_reci' => 'pridev',
            'prevod' => 'teško',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'modern',
            'vrsta_reci' => 'pridev',
            'prevod' => 'moderno',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'praktisch',
            'vrsta_reci' => 'pridev',
            'prevod' => 'praktično',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'preiswert',
            'vrsta_reci' => 'pridev',
            'prevod' => 'povoljno',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'günstig',
            'vrsta_reci' => 'pridev',
            'prevod' => 'povoljno',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Geld',
            'vrsta_reci' => 'imenica',
            'prevod' => 'novac',
            'rod' => 'das',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Preis',
            'vrsta_reci' => 'imenica',
            'prevod' => 'cena',
            'rod' => 'der',
            'mnozina' => 'Preise',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Angebot',
            'vrsta_reci' => 'imenica',
            'prevod' => 'ponuda',
            'rod' => 'das',
            'mnozina' => 'Angebote',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Sonderangebot',
            'vrsta_reci' => 'imenica',
            'prevod' => 'akcija',
            'rod' => 'das',
            'mnozina' => 'Sonderangebote',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'kosten',
            'vrsta_reci' => 'glagol',
            'prevod' => 'koštati',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Hilfe',
            'vrsta_reci' => 'imenica',
            'prevod' => 'pomoć',
            'rod' => 'die',
            'mnozina' => 'Hilfen',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Zimmer',
            'vrsta_reci' => 'imenica',
            'prevod' => 'soba',
            'rod' => 'das',
            'mnozina' => 'Zimmer',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'brauchen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'trebati',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'finden',
            'vrsta_reci' => 'glagol',
            'prevod' => 'nalaziti(nešto nekakvim)',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'sagen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'reći',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'nur',
            'vrsta_reci' => 'prilog',
            'prevod' => 'samo',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'wirklich',
            'vrsta_reci' => 'rečca',
            'prevod' => 'zaista',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Farbe',
            'vrsta_reci' => 'imenica',
            'prevod' => 'boja',
            'rod' => 'die',
            'mnozina' => 'Farben',
            'nivo' => '4',
            'tag1' => 'boja',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'blau',
            'vrsta_reci' => 'pridev',
            'prevod' => 'plava',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => 'boja',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'braun',
            'vrsta_reci' => 'pridev',
            'prevod' => 'braon',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => 'boja',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'gelb',
            'vrsta_reci' => 'pridev',
            'prevod' => 'žuta',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => 'boja',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'grün',
            'vrsta_reci' => 'pridev',
            'prevod' => 'zelena',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => 'boja',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'orange',
            'vrsta_reci' => 'pridev',
            'prevod' => 'narandžasta',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => 'boja',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'rot',
            'vrsta_reci' => 'pridev',
            'prevod' => 'crvena',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => 'boja',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'schwarz',
            'vrsta_reci' => 'pridev',
            'prevod' => 'crna',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => 'boja',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'weiß',
            'vrsta_reci' => 'pridev',
            'prevod' => 'bela',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => 'boja',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Form',
            'vrsta_reci' => 'imenica',
            'prevod' => 'oblik',
            'rod' => 'die',
            'mnozina' => 'Formen',
            'nivo' => '4',
            'tag1' => 'boja',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'eckig',
            'vrsta_reci' => 'pridev',
            'prevod' => 'uglasto',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'rund',
            'vrsta_reci' => 'pridev',
            'prevod' => 'okruglo',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'neu',
            'vrsta_reci' => 'pridev',
            'prevod' => 'novo',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Material',
            'vrsta_reci' => 'imenica',
            'prevod' => 'materijal',
            'rod' => 'das',
            'mnozina' => 'Materialien',
            'nivo' => '4',
            'tag1' => 'materijal',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Glas',
            'vrsta_reci' => 'imenica',
            'prevod' => 'staklo',
            'rod' => 'das',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => 'materijal',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Holz',
            'vrsta_reci' => 'imenica',
            'prevod' => 'drvo',
            'rod' => 'das',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => 'materijal',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Metall',
            'vrsta_reci' => 'imenica',
            'prevod' => 'metal',
            'rod' => 'das',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => 'materijal',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Papier',
            'vrsta_reci' => 'imenica',
            'prevod' => 'papir',
            'rod' => 'das',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => 'materijal',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Plastik',
            'vrsta_reci' => 'imenica',
            'prevod' => 'plastika',
            'rod' => 'das',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => 'materijal',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Kunststoff',
            'vrsta_reci' => 'imenica',
            'prevod' => 'veštački materijal',
            'rod' => 'der',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => 'materijal',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Gegenstand',
            'vrsta_reci' => 'imenica',
            'prevod' => 'predmet',
            'rod' => 'der',
            'mnozina' => 'Gegenstände',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Bleistift',
            'vrsta_reci' => 'imenica',
            'prevod' => 'olovka',
            'rod' => 'der',
            'mnozina' => 'Bleistifte',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Brille',
            'vrsta_reci' => 'imenica',
            'prevod' => 'naočare',
            'rod' => 'die',
            'mnozina' => 'Brillen',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Buch',
            'vrsta_reci' => 'imenica',
            'prevod' => 'knjiga',
            'rod' => 'das',
            'mnozina' => 'Bücher',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Feuerzeug',
            'vrsta_reci' => 'imenica',
            'prevod' => 'upaljač',
            'rod' => 'das',
            'mnozina' => 'Feuerzeuge',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Flasche',
            'vrsta_reci' => 'imenica',
            'prevod' => 'flaša',
            'rod' => 'die',
            'mnozina' => 'Flaschen',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Fotoapparat',
            'vrsta_reci' => 'imenica',
            'prevod' => 'fotoaparat',
            'rod' => 'der',
            'mnozina' => 'Fotoapparate',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Geldbörse',
            'vrsta_reci' => 'imenica',
            'prevod' => 'novčanik',
            'rod' => 'die',
            'mnozina' => 'Geldbörsen',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Kette',
            'vrsta_reci' => 'imenica',
            'prevod' => 'lanac',
            'rod' => 'die',
            'mnozina' => 'Ketten',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Kugelschreiber',
            'vrsta_reci' => 'imenica',
            'prevod' => 'hemijska olovka',
            'rod' => 'der',
            'mnozina' => 'Kugelschreiber',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Regenschirm',
            'vrsta_reci' => 'imenica',
            'prevod' => 'kišobran',
            'rod' => 'der',
            'mnozina' => 'Regenschirme',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Schirm',
            'vrsta_reci' => 'imenica',
            'prevod' => 'kišobran',
            'rod' => 'der',
            'mnozina' => 'Schirme',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Ring',
            'vrsta_reci' => 'imenica',
            'prevod' => 'prsten',
            'rod' => 'der',
            'mnozina' => 'Ringe',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Schlüssel',
            'vrsta_reci' => 'imenica',
            'prevod' => 'ključ',
            'rod' => 'der',
            'mnozina' => 'Schlüssel',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Seife',
            'vrsta_reci' => 'imenica',
            'prevod' => 'sapun',
            'rod' => 'die',
            'mnozina' => 'Seifen',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Streichholz',
            'vrsta_reci' => 'imenica',
            'prevod' => 'šibica',
            'rod' => 'das',
            'mnozina' => 'Streichhölzer',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Tasche',
            'vrsta_reci' => 'imenica',
            'prevod' => 'tašna',
            'rod' => 'die',
            'mnozina' => 'Taschen',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Uhr',
            'vrsta_reci' => 'imenica',
            'prevod' => 'sat',
            'rod' => 'die',
            'mnozina' => 'Uhren',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Adresse',
            'vrsta_reci' => 'imenica',
            'prevod' => 'adresa',
            'rod' => 'die',
            'mnozina' => 'Adressen',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => ' E-Mail',
            'vrsta_reci' => 'imenica',
            'prevod' => 'imejl',
            'rod' => 'die',
            'mnozina' => ' E-Mails',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Geburtsdatum',
            'vrsta_reci' => 'imenica',
            'prevod' => 'datum rođenja',
            'rod' => 'das',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Daten',
            'vrsta_reci' => 'imenica',
            'prevod' => 'datumi',
            'rod' => 'die',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Hausnummer',
            'vrsta_reci' => 'imenica',
            'prevod' => 'kućni broj',
            'rod' => 'die',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Ort',
            'vrsta_reci' => 'imenica',
            'prevod' => 'mesto(grad)',
            'rod' => 'der',
            'mnozina' => 'Orte',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Postleitzahl',
            'vrsta_reci' => 'imenica',
            'prevod' => 'poštanski broj',
            'rod' => 'die',
            'mnozina' => 'Postleitzahlen',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Straße',
            'vrsta_reci' => 'imenica',
            'prevod' => 'ulica',
            'rod' => 'die',
            'mnozina' => 'Straßen',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Telefon',
            'vrsta_reci' => 'imenica',
            'prevod' => 'telefon',
            'rod' => 'das',
            'mnozina' => 'Telefone',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Entschuldigung',
            'vrsta_reci' => 'imenica',
            'prevod' => 'izvninjenje',
            'rod' => 'die',
            'mnozina' => 'Entschuldigungen',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Menge',
            'vrsta_reci' => 'imenica',
            'prevod' => 'količina',
            'rod' => 'die',
            'mnozina' => 'Mengen',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Problem',
            'vrsta_reci' => 'imenica',
            'prevod' => 'problem',
            'rod' => 'das',
            'mnozina' => 'Probleme',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Produkt',
            'vrsta_reci' => 'imenica',
            'prevod' => 'proizvod',
            'rod' => 'das',
            'mnozina' => 'Produkte',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Wort',
            'vrsta_reci' => 'imenica',
            'prevod' => 'reč',
            'rod' => 'das',
            'mnozina' => 'Wörter',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Wörterbuch',
            'vrsta_reci' => 'imenica',
            'prevod' => 'rečnik',
            'rod' => 'das',
            'mnozina' => 'Wörterbücher',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'bieten',
            'vrsta_reci' => 'glagol',
            'prevod' => 'nuditi',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'schreiben',
            'vrsta_reci' => 'glagol',
            'prevod' => 'pisati',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'jetzt',
            'vrsta_reci' => 'prilog',
            'prevod' => 'sada',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'jede',
            'vrsta_reci' => 'zamenica',
            'prevod' => 'svaka',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'jeder',
            'vrsta_reci' => 'zamenica',
            'prevod' => 'svaki',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'einmal',
            'vrsta_reci' => 'prilog',
            'prevod' => 'jednom',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'so',
            'vrsta_reci' => 'prilog',
            'prevod' => 'tako/toliko',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '4',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Büro',
            'vrsta_reci' => 'imenica',
            'prevod' => 'kancelarija',
            'rod' => 'das',
            'mnozina' => 'Büros',
            'nivo' => '5',
            'tag1' => 'kancelarija',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Arbeitsplatz',
            'vrsta_reci' => 'imenica',
            'prevod' => 'radno mesto',
            'rod' => 'der',
            'mnozina' => 'Arbeitsplätze',
            'nivo' => '5',
            'tag1' => 'kancelarija',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Bildschirm',
            'vrsta_reci' => 'imenica',
            'prevod' => 'ekran',
            'rod' => 'der',
            'mnozina' => 'Bildschirme',
            'nivo' => '5',
            'tag1' => 'kancelarija',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Briefmarke',
            'vrsta_reci' => 'imenica',
            'prevod' => 'poštanska markica',
            'rod' => 'die',
            'mnozina' => 'Briefmarken',
            'nivo' => '5',
            'tag1' => 'kancelarija',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Chef',
            'vrsta_reci' => 'imenica',
            'prevod' => 'šef',
            'rod' => 'der',
            'mnozina' => 'Chefs',
            'nivo' => '5',
            'tag1' => 'kancelarija',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Computer',
            'vrsta_reci' => 'imenica',
            'prevod' => 'kompjuter',
            'rod' => 'der',
            'mnozina' => 'Computer',
            'nivo' => '5',
            'tag1' => 'kancelarija',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Drucker',
            'vrsta_reci' => 'imenica',
            'prevod' => 'štampač',
            'rod' => 'der',
            'mnozina' => 'Drucker',
            'nivo' => '5',
            'tag1' => 'kancelarija',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Firma',
            'vrsta_reci' => 'imenica',
            'prevod' => 'firma',
            'rod' => 'die',
            'mnozina' => 'Firmen',
            'nivo' => '5',
            'tag1' => 'kancelarija',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Formular',
            'vrsta_reci' => 'imenica',
            'prevod' => 'obrazac',
            'rod' => 'das',
            'mnozina' => 'Formulare',
            'nivo' => '5',
            'tag1' => 'kancelarija',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Handy',
            'vrsta_reci' => 'imenica',
            'prevod' => 'telefon',
            'rod' => 'das',
            'mnozina' => 'Handys',
            'nivo' => '5',
            'tag1' => 'kancelarija',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Kalender',
            'vrsta_reci' => 'imenica',
            'prevod' => 'kalendar',
            'rod' => 'der',
            'mnozina' => 'Kalender',
            'nivo' => '5',
            'tag1' => 'kancelarija',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Laptop',
            'vrsta_reci' => 'imenica',
            'prevod' => 'laptop',
            'rod' => 'der',
            'mnozina' => 'Laptops',
            'nivo' => '5',
            'tag1' => 'kancelarija',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Maus',
            'vrsta_reci' => 'imenica',
            'prevod' => 'miš',
            'rod' => 'die',
            'mnozina' => 'Mäuse',
            'nivo' => '5',
            'tag1' => 'kancelarija',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Notizbuch',
            'vrsta_reci' => 'imenica',
            'prevod' => 'rokovnik',
            'rod' => 'das',
            'mnozina' => 'Notizbuch',
            'nivo' => '5',
            'tag1' => 'kancelarija',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Rechnung',
            'vrsta_reci' => 'imenica',
            'prevod' => 'račun',
            'rod' => 'die',
            'mnozina' => 'Rechnungen',
            'nivo' => '5',
            'tag1' => 'kancelarija',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'SMS',
            'vrsta_reci' => 'imenica',
            'prevod' => 'poruka',
            'rod' => 'die',
            'mnozina' => 'SMS',
            'nivo' => '5',
            'tag1' => 'kancelarija',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Stift',
            'vrsta_reci' => 'imenica',
            'prevod' => 'olovka',
            'rod' => 'der',
            'mnozina' => 'Stifte',
            'nivo' => '5',
            'tag1' => 'kancelarija',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Termin',
            'vrsta_reci' => 'imenica',
            'prevod' => 'termin',
            'rod' => 'der',
            'mnozina' => 'Termine',
            'nivo' => '5',
            'tag1' => 'kancelarija',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Briefpapier',
            'vrsta_reci' => 'imenica',
            'prevod' => 'papir za štampu',
            'rod' => 'das',
            'mnozina' => 'Briefpapiere',
            'nivo' => '5',
            'tag1' => 'kancelarija',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Achtung!',
            'vrsta_reci' => 'uzvik',
            'prevod' => 'pažnja!',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '5',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Foto',
            'vrsta_reci' => 'imenica',
            'prevod' => 'fotografija',
            'rod' => 'das',
            'mnozina' => 'Fotos',
            'nivo' => '5',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Gruß',
            'vrsta_reci' => 'imenica',
            'prevod' => 'pozdrav',
            'rod' => 'der',
            'mnozina' => 'Grüße',
            'nivo' => '5',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'See',
            'vrsta_reci' => 'imenica',
            'prevod' => 'jezero',
            'rod' => 'der',
            'mnozina' => 'Seen',
            'nivo' => '5',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Stress',
            'vrsta_reci' => 'imenica',
            'prevod' => 'stres',
            'rod' => 'der',
            'mnozina' => '',
            'nivo' => '5',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Zeit',
            'vrsta_reci' => 'imenica',
            'prevod' => 'vreme',
            'rod' => 'die',
            'mnozina' => '',
            'nivo' => '5',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'gehen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'ići',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '5',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'suchen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'tražiti',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '5',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'sehen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'videti',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '5',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'heute',
            'vrsta_reci' => 'prilog',
            'prevod' => 'danas',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '5',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'hier',
            'vrsta_reci' => 'predlog',
            'prevod' => 'ovde',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '5',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'mit',
            'vrsta_reci' => 'veznik',
            'prevod' => 'sa',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '5',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'wieder',
            'vrsta_reci' => 'prilog',
            'prevod' => 'opet',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '5',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Freizeit',
            'vrsta_reci' => 'imenica',
            'prevod' => 'slobodno vreme',
            'rod' => 'die',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Hobby',
            'vrsta_reci' => 'imenica',
            'prevod' => 'hobi',
            'rod' => 'das',
            'mnozina' => 'Hobbys',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Ausflug   ',
            'vrsta_reci' => 'imenica',
            'prevod' => 'izlet',
            'rod' => 'der',
            'mnozina' => 'Ausflüge',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Film',
            'vrsta_reci' => 'imenica',
            'prevod' => 'film',
            'rod' => 'der',
            'mnozina' => 'Filme',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Kino',
            'vrsta_reci' => 'imenica',
            'prevod' => 'bioskop',
            'rod' => 'das',
            'mnozina' => 'Kinos',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'backen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'peći',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'besuchen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'posetiti',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'treffen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'sresti se',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'kochen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'kuvati',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'lesen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'čitati',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'lieben',
            'vrsta_reci' => 'glagol',
            'prevod' => 'voleti',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'malen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'slikati/bojiti',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Musik',
            'vrsta_reci' => 'imenica',
            'prevod' => 'muzika',
            'rod' => 'die',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Rad',
            'vrsta_reci' => 'imenica',
            'prevod' => 'bicikl',
            'rod' => 'das',
            'mnozina' => 'Räder',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'fahren',
            'vrsta_reci' => 'glagol',
            'prevod' => 'voziti',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'schwimmen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'plivati',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'singen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'pevati',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'spielen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'igrati se',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'tanzen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'plesati',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'immer',
            'vrsta_reci' => 'prilog',
            'prevod' => 'uvek',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'oft',
            'vrsta_reci' => 'prilog',
            'prevod' => 'često',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'manchmal',
            'vrsta_reci' => 'prilog',
            'prevod' => 'ponekad',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'nie',
            'vrsta_reci' => 'prilog',
            'prevod' => 'nikada',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'fast',
            'vrsta_reci' => 'prilog',
            'prevod' => 'skoro',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'natürlich',
            'vrsta_reci' => 'rečca',
            'prevod' => 'naravno',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'klar',
            'vrsta_reci' => 'pridev',
            'prevod' => 'jasno',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'leider',
            'vrsta_reci' => 'rečca',
            'prevod' => 'nažalost',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Auto',
            'vrsta_reci' => 'imenica',
            'prevod' => 'automobil',
            'rod' => 'das',
            'mnozina' => 'Autos',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Gespräch',
            'vrsta_reci' => 'imenica',
            'prevod' => 'razgovor',
            'rod' => 'das',
            'mnozina' => 'Gespräche',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Internet',
            'vrsta_reci' => 'imenica',
            'prevod' => 'internet',
            'rod' => 'das',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Natur',
            'vrsta_reci' => 'imenica',
            'prevod' => 'priroda',
            'rod' => 'die',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Spaß',
            'vrsta_reci' => 'imenica',
            'prevod' => 'zabava',
            'rod' => 'der',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'rauchen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'pušiti',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'gern',
            'vrsta_reci' => 'prilog',
            'prevod' => 'rado',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'können',
            'vrsta_reci' => 'glagol',
            'prevod' => 'moći',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'viel',
            'vrsta_reci' => 'pridev',
            'prevod' => 'puno',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '6',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Stadt',
            'vrsta_reci' => 'imenica',
            'prevod' => 'grad',
            'rod' => 'die',
            'mnozina' => 'Städte',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Ausstellung',
            'vrsta_reci' => 'imenica',
            'prevod' => 'izložba',
            'rod' => 'die',
            'mnozina' => 'Ausstellungen',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Bar',
            'vrsta_reci' => 'imenica',
            'prevod' => 'bar',
            'rod' => 'die',
            'mnozina' => 'Bars',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Cafe',
            'vrsta_reci' => 'imenica',
            'prevod' => 'kafić',
            'rod' => 'das',
            'mnozina' => 'Cafes',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Kaffee',
            'vrsta_reci' => 'imenica',
            'prevod' => 'kafa',
            'rod' => 'der',
            'mnozina' => '',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Disco',
            'vrsta_reci' => 'imenica',
            'prevod' => 'diskoteka',
            'rod' => 'die',
            'mnozina' => 'Discos',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Kneipe',
            'vrsta_reci' => 'imenica',
            'prevod' => 'kafana',
            'rod' => 'die',
            'mnozina' => 'Kneipen',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Konzert',
            'vrsta_reci' => 'imenica',
            'prevod' => 'koncert',
            'rod' => 'das',
            'mnozina' => 'Konzerte',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Museum',
            'vrsta_reci' => 'imenica',
            'prevod' => 'muzej',
            'rod' => 'das',
            'mnozina' => 'Museen',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Restaurant',
            'vrsta_reci' => 'imenica',
            'prevod' => 'restoran',
            'rod' => 'das',
            'mnozina' => 'Restaurants',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Schwimmbad',
            'vrsta_reci' => 'imenica',
            'prevod' => 'bazen',
            'rod' => 'das',
            'mnozina' => 'Schwimmbäder',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Theater',
            'vrsta_reci' => 'imenica',
            'prevod' => 'pozorište',
            'rod' => 'das',
            'mnozina' => 'Theater',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Tageszeit',
            'vrsta_reci' => 'imenica',
            'prevod' => 'doba dana',
            'rod' => 'die',
            'mnozina' => 'Tageszeiten',
            'nivo' => '7',
            'tag1' => 'vreme',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Tag',
            'vrsta_reci' => 'imenica',
            'prevod' => 'dan ',
            'rod' => 'der',
            'mnozina' => 'Tage ',
            'nivo' => '7',
            'tag1' => 'vreme',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Morgen',
            'vrsta_reci' => 'imenica',
            'prevod' => 'jutro',
            'rod' => 'der',
            'mnozina' => 'Morgen',
            'nivo' => '7',
            'tag1' => 'vreme',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Vormittag',
            'vrsta_reci' => 'imenica',
            'prevod' => 'prepodne',
            'rod' => 'der',
            'mnozina' => 'Vormittage',
            'nivo' => '7',
            'tag1' => 'vreme',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Mittag',
            'vrsta_reci' => 'imenica',
            'prevod' => 'podne',
            'rod' => 'der',
            'mnozina' => 'Mittage',
            'nivo' => '7',
            'tag1' => 'vreme',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Nachmitag',
            'vrsta_reci' => 'imenica',
            'prevod' => 'poslepodne',
            'rod' => 'der',
            'mnozina' => 'Nachmitage',
            'nivo' => '7',
            'tag1' => 'vreme',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Abend',
            'vrsta_reci' => 'imenica',
            'prevod' => 'veče',
            'rod' => 'der',
            'mnozina' => 'Abende',
            'nivo' => '7',
            'tag1' => 'vreme',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Nacht   ',
            'vrsta_reci' => 'imenica',
            'prevod' => 'noć',
            'rod' => 'die',
            'mnozina' => 'Nächte',
            'nivo' => '7',
            'tag1' => 'vreme',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Woche',
            'vrsta_reci' => 'imenica',
            'prevod' => 'sedmica',
            'rod' => 'die',
            'mnozina' => 'Wochen',
            'nivo' => '7',
            'tag1' => 'vreme',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Montag',
            'vrsta_reci' => 'imenica',
            'prevod' => 'ponedeljak',
            'rod' => 'der',
            'mnozina' => 'Montage',
            'nivo' => '7',
            'tag1' => 'vreme',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Dienstag',
            'vrsta_reci' => 'imenica',
            'prevod' => 'utorak',
            'rod' => 'der',
            'mnozina' => 'Dienstage',
            'nivo' => '7',
            'tag1' => 'vreme',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Mittwoch',
            'vrsta_reci' => 'imenica',
            'prevod' => 'sreda',
            'rod' => 'der',
            'mnozina' => 'Mittwoche',
            'nivo' => '7',
            'tag1' => 'vreme',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Donnerstag',
            'vrsta_reci' => 'imenica',
            'prevod' => 'četvrtak',
            'rod' => 'der',
            'mnozina' => 'Donnerstage',
            'nivo' => '7',
            'tag1' => 'vreme',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Freitag',
            'vrsta_reci' => 'imenica',
            'prevod' => 'petak',
            'rod' => 'der',
            'mnozina' => 'Freitage',
            'nivo' => '7',
            'tag1' => 'vreme',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Samstag',
            'vrsta_reci' => 'imenica',
            'prevod' => 'subota',
            'rod' => 'der',
            'mnozina' => 'Samstage',
            'nivo' => '7',
            'tag1' => 'vreme',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Sonntag',
            'vrsta_reci' => 'imenica',
            'prevod' => 'nedelja',
            'rod' => 'der',
            'mnozina' => 'Sonntage',
            'nivo' => '7',
            'tag1' => 'vreme',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Wochenende',
            'vrsta_reci' => 'imenica',
            'prevod' => 'vikend',
            'rod' => 'das',
            'mnozina' => 'Wochenenden',
            'nivo' => '7',
            'tag1' => 'vreme',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Essen',
            'vrsta_reci' => 'imenica',
            'prevod' => 'jelo',
            'rod' => 'das',
            'mnozina' => 'Essen',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Fernsehen',
            'vrsta_reci' => 'imenica',
            'prevod' => 'televizija',
            'rod' => 'das',
            'mnozina' => '',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Radio',
            'vrsta_reci' => 'imenica',
            'prevod' => 'radio',
            'rod' => 'das',
            'mnozina' => 'Radios',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Lust',
            'vrsta_reci' => 'imenica',
            'prevod' => 'volja',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Idee',
            'vrsta_reci' => 'imenica',
            'prevod' => 'ideja',
            'rod' => 'die',
            'mnozina' => 'Ideen',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'wissen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'znati',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'bald',
            'vrsta_reci' => 'prilog',
            'prevod' => 'skoro',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'besonders',
            'vrsta_reci' => 'prilog',
            'prevod' => 'naročito',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'höflich   ',
            'vrsta_reci' => 'prilog',
            'prevod' => 'ljubazno',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'noch',
            'vrsta_reci' => 'prilog',
            'prevod' => 'još',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'spät',
            'vrsta_reci' => 'prilog',
            'prevod' => 'kasno',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'warum',
            'vrsta_reci' => 'prilog',
            'prevod' => 'zašto',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'vor ',
            'vrsta_reci' => 'predlog',
            'prevod' => 'pre ',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'nach',
            'vrsta_reci' => 'predlog',
            'prevod' => 'posle ',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '7',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'dann',
            'vrsta_reci' => 'prilog',
            'prevod' => 'onda',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Apfel',
            'vrsta_reci' => 'imenica',
            'prevod' => 'jabuka',
            'rod' => 'der',
            'mnozina' => 'Äpfel',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Braten',
            'vrsta_reci' => 'imenica',
            'prevod' => 'pečenje',
            'rod' => 'der',
            'mnozina' => 'Braten',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Brot',
            'vrsta_reci' => 'imenica',
            'prevod' => 'hleb',
            'rod' => 'das',
            'mnozina' => 'Brote',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Brötchen',
            'vrsta_reci' => 'imenica',
            'prevod' => 'narezak',
            'rod' => 'das',
            'mnozina' => 'Brötchen',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Butter',
            'vrsta_reci' => 'imenica',
            'prevod' => 'puter',
            'rod' => 'die',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Ei',
            'vrsta_reci' => 'imenica',
            'prevod' => 'jaje',
            'rod' => 'das',
            'mnozina' => 'Eier',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Eis',
            'vrsta_reci' => 'imenica',
            'prevod' => 'led/sladoled',
            'rod' => 'das',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Fisch',
            'vrsta_reci' => 'imenica',
            'prevod' => 'riba',
            'rod' => 'der',
            'mnozina' => 'Fische',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Fleisch',
            'vrsta_reci' => 'imenica',
            'prevod' => 'meso',
            'rod' => 'das',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Käse',
            'vrsta_reci' => 'imenica',
            'prevod' => 'sir',
            'rod' => 'der',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Kartoffel',
            'vrsta_reci' => 'imenica',
            'prevod' => 'krompir',
            'rod' => 'die',
            'mnozina' => 'Kartoffeln',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Kuchen',
            'vrsta_reci' => 'imenica',
            'prevod' => 'kolač',
            'rod' => 'der',
            'mnozina' => 'Kuchen',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Milch',
            'vrsta_reci' => 'imenica',
            'prevod' => 'mleko',
            'rod' => 'die',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Obst',
            'vrsta_reci' => 'imenica',
            'prevod' => 'voće',
            'rod' => 'das',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Gemüse',
            'vrsta_reci' => 'imenica',
            'prevod' => 'povrće',
            'rod' => 'das',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Orange',
            'vrsta_reci' => 'imenica',
            'prevod' => 'pomorandža',
            'rod' => 'die',
            'mnozina' => 'Orangen',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Reis',
            'vrsta_reci' => 'imenica',
            'prevod' => 'pirinač',
            'rod' => 'der',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Sahne',
            'vrsta_reci' => 'imenica',
            'prevod' => 'pavlaka/šlag',
            'rod' => 'die',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Salat',
            'vrsta_reci' => 'imenica',
            'prevod' => 'salata',
            'rod' => 'der',
            'mnozina' => 'Salate',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Schinken',
            'vrsta_reci' => 'imenica',
            'prevod' => 'šunka',
            'rod' => 'der',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Schokolade',
            'vrsta_reci' => 'imenica',
            'prevod' => 'čokolada',
            'rod' => 'die',
            'mnozina' => 'Schokoladen',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Suppe',
            'vrsta_reci' => 'imenica',
            'prevod' => 'supa',
            'rod' => 'die',
            'mnozina' => 'Suppen',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Tee',
            'vrsta_reci' => 'imenica',
            'prevod' => 'čaj',
            'rod' => 'der',
            'mnozina' => 'Tees',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Tomate',
            'vrsta_reci' => 'imenica',
            'prevod' => 'paradajz',
            'rod' => 'die',
            'mnozina' => 'Tomaten',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Würste',
            'vrsta_reci' => 'imenica',
            'prevod' => 'kobasice',
            'rod' => 'die',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Zitrone',
            'vrsta_reci' => 'imenica',
            'prevod' => 'limun',
            'rod' => 'die',
            'mnozina' => 'Zitronen',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Zwiebel',
            'vrsta_reci' => 'imenica',
            'prevod' => 'crni luk',
            'rod' => 'die',
            'mnozina' => 'Zwiebeln',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Durst',
            'vrsta_reci' => 'imenica',
            'prevod' => 'žeđ',
            'rod' => 'der',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Hunger',
            'vrsta_reci' => 'imenica',
            'prevod' => 'glad',
            'rod' => 'der',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'frühstücken',
            'vrsta_reci' => 'glagol',
            'prevod' => 'doručkovati',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Frühstück',
            'vrsta_reci' => 'imenica',
            'prevod' => 'doručak',
            'rod' => 'das',
            'mnozina' => 'Frühstücke',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Kühlschrank',
            'vrsta_reci' => 'imenica',
            'prevod' => 'frižider',
            'rod' => 'der',
            'mnozina' => 'Kühlschränke',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'schmecken',
            'vrsta_reci' => 'glagol',
            'prevod' => 'biti ukusno',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'lecker',
            'vrsta_reci' => 'pridev',
            'prevod' => 'ukusno',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Gleichfalls',
            'vrsta_reci' => 'rečca',
            'prevod' => 'takođe',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Einladung',
            'vrsta_reci' => 'imenica',
            'prevod' => 'pozivnica',
            'rod' => 'die',
            'mnozina' => 'Einladungen',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Speisekarte',
            'vrsta_reci' => 'imenica',
            'prevod' => 'jelovnik',
            'rod' => 'die',
            'mnozina' => 'Speisekarten',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Vorspeise',
            'vrsta_reci' => 'imenica',
            'prevod' => 'predjelo',
            'rod' => 'die',
            'mnozina' => 'Vorspeisen',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Nachspeise',
            'vrsta_reci' => 'imenica',
            'prevod' => 'dezert',
            'rod' => 'die',
            'mnozina' => 'Nachspeisen',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Dessert',
            'vrsta_reci' => 'imenica',
            'prevod' => 'dezert',
            'rod' => 'das',
            'mnozina' => 'Desserts',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Hauptspeise',
            'vrsta_reci' => 'imenica',
            'prevod' => 'glavno jelo',
            'rod' => 'die',
            'mnozina' => 'Hauptspeisen',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Mittagessen',
            'vrsta_reci' => 'imenica',
            'prevod' => 'ručak',
            'rod' => 'das',
            'mnozina' => 'Mittagessen',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Abendessen',
            'vrsta_reci' => 'imenica',
            'prevod' => 'večera',
            'rod' => 'das',
            'mnozina' => 'Abendessen',
            'nivo' => '8',
            'tag1' => 'hrana',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'kennen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'poznavati',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'etwas',
            'vrsta_reci' => 'zamenica',
            'prevod' => 'nešto',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'erst',
            'vrsta_reci' => 'prilog',
            'prevod' => 'tek',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'schlafen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'spavati',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'mögen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'voleti',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'möchten',
            'vrsta_reci' => 'glagol',
            'prevod' => 'želeti',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Verkehr',
            'vrsta_reci' => 'imenica',
            'prevod' => 'saobraćaj',
            'rod' => 'der',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Bahnhof',
            'vrsta_reci' => 'imenica',
            'prevod' => 'železnička stanica',
            'rod' => 'der',
            'mnozina' => 'Bahnhöfe',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Bahn',
            'vrsta_reci' => 'imenica',
            'prevod' => 'železnica',
            'rod' => 'die',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Bahnsteig',
            'vrsta_reci' => 'imenica',
            'prevod' => 'peron',
            'rod' => 'der',
            'mnozina' => 'Bahnsteige',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Gleis',
            'vrsta_reci' => 'imenica',
            'prevod' => 'kolosek',
            'rod' => 'der',
            'mnozina' => 'Gleise',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Bus',
            'vrsta_reci' => 'imenica',
            'prevod' => 'autobus',
            'rod' => 'der',
            'mnozina' => 'Busse',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Haltestelle',
            'vrsta_reci' => 'imenica',
            'prevod' => 'stajalište',
            'rod' => 'die',
            'mnozina' => 'Haltestellen',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Flughafen',
            'vrsta_reci' => 'imenica',
            'prevod' => 'aerodrom',
            'rod' => 'der',
            'mnozina' => 'Flughäfen',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Flugzeug',
            'vrsta_reci' => 'imenica',
            'prevod' => 'avion',
            'rod' => 'das',
            'mnozina' => 'Flugzeuge',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Gepäck',
            'vrsta_reci' => 'imenica',
            'prevod' => 'prtljag',
            'rod' => 'das',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Koffer',
            'vrsta_reci' => 'imenica',
            'prevod' => 'kofer',
            'rod' => 'der',
            'mnozina' => 'Koffer',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'S-Bahn',
            'vrsta_reci' => 'imenica',
            'prevod' => 'gradska železnica',
            'rod' => 'die',
            'mnozina' => 'S-Bahnen',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Straßenbahn',
            'vrsta_reci' => 'imenica',
            'prevod' => 'tramvaj',
            'rod' => 'die',
            'mnozina' => 'Straßenbahnen',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Taxi',
            'vrsta_reci' => 'imenica',
            'prevod' => 'taksi',
            'rod' => 'das',
            'mnozina' => 'Taxis',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'U-Bahn',
            'vrsta_reci' => 'imenica',
            'prevod' => 'metro',
            'rod' => 'die',
            'mnozina' => 'U-Bahnen',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Verkehrsmittel',
            'vrsta_reci' => 'imenica',
            'prevod' => 'prevozno sredstvo',
            'rod' => 'das',
            'mnozina' => 'Verkehrsmittel',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Zug',
            'vrsta_reci' => 'imenica',
            'prevod' => 'voz',
            'rod' => 'der',
            'mnozina' => 'Züge',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'abfahren',
            'vrsta_reci' => 'glagol',
            'prevod' => 'krenuti',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'abholen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'pokupiti',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'ankommen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'stići',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'aussteigen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'izaći iz prevoza',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'einsteigen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'ući u prevoz',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'umsteigen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'presedati',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => 'saobracaj',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Minute',
            'vrsta_reci' => 'imenica',
            'prevod' => 'minut',
            'rod' => 'die',
            'mnozina' => 'Minuten',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'Vorsicht',
            'vrsta_reci' => 'imenica',
            'prevod' => 'oprez',
            'rod' => 'die',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'anrufen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'nazvati',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'bekommen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'dobiti',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'einkaufen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'ići u kupovinu',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'fernsehen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'gledati TV',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'mitbringen',
            'vrsta_reci' => 'glagol',
            'prevod' => 'poneti sa sobom',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'also',
            'vrsta_reci' => 'rečca',
            'prevod' => 'dakle',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'gerade',
            'vrsta_reci' => 'prilog',
            'prevod' => 'upravo',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'nächste',
            'vrsta_reci' => 'pridev',
            'prevod' => 'sledeća/i',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            Word::create([
            'rec' => 'auf',
            'vrsta_reci' => 'predlog',
            'prevod' => 'na',
            'rod' => '',
            'mnozina' => '',
            'nivo' => '8',
            'tag1' => '',
            'id_jezika' => '1',
             ]);
            
            
            
            
    }
}
