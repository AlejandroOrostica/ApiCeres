<?php

use Illuminate\Database\Seeder;

class InvestigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Roberto Gonzalez
        //Google schoolar
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Identifying sarcasm in Twitter: a closer look',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Roberto González-Ibánez, Smaranda Muresan, Nina Wacholder',

                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Evaluating the synergic effect of collaboration in information seeking',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Chirag Shah, Roberto González-Ibáñez',
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Exploring information seeking processes in collaborative search tasks',
                'investigationYear' => '2010',
                'investigationAuthors' => 'Chirag Shah, Roberto González‐Ibáñez',
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Coagmento: A system for supporting collaborative information seeking',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Roberto González‐Ibáñez, Chirag Shah',
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Let’s search together, but not too close! An analysis of communication and performance in collaborative information seeking',
                'investigationYear' => '2013',
                'investigationAuthors' => 'Roberto González-Ibáñez, Muge Haseki, Chirag Shah',
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Exploration of Dynamic Query Suggestions and Dynamic Search Results For Their Effects on Search Behaviors',
                'investigationYear' => '2012',
                'investigationAuthors' => 'Chirag Shah, Jingjing Liu, Roberto González-Ibáñez, Nicholas Belkin',
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Spatial context in collaborative information seeking',
                'investigationYear' => '2012',
                'investigationAuthors' => 'Chirag Shah, Roberto González-Ibáñez',
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Smile! Studying expressivity of happiness as a synergic factor in collaborative information seeking',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Roberto González‐Ibáñez, Chirag Shah, Natalia Córdova‐Rubio',
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'An integrated review of emoticons in computer-mediated communication',
                'investigationYear' => '2017',
                'investigationAuthors' => 'Nerea Aldunate, Roberto González-Ibáñez',
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Time and space in collaborative information seeking: The clash of effectiveness and uniqueness',
                'investigationYear' => '2012',
                'investigationAuthors' => 'Roberto González‐Ibáñez, Muge Haseki, Chirag Shah',
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A Performance-Based Test for Assessing Students’ Online Inquiry Competences in Schools',
                'investigationYear' => '2018',
                'investigationAuthors' => 'Sormunen, E., González-Ibáñez, R., Kiili, C., Erdmann, N., Escobar-Macaya, M',
                'page_id' => 3,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'An integrated review of emoticons in computer-mediated communication',
                'investigationYear' => '2017',
                'investigationAuthors' => 'Aldunate, N., González-Ibáñez, R.',
                'page_id' => 3,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'NEURONE: oNlinE inqUiRy experimentatiON systEm',
                'investigationYear' => '2017',
                'investigationAuthors' => 'González-Ibáñez, R., Gacitúa, D., Sormunen, E., Kiili, C.',
                'page_id' => 3,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Two’s not always company: collaborative information seeking across task types',
                'investigationYear' => '2017',
                'investigationAuthors' => 'Shah, C., Hendahewa, C., González-Ibáñez, R.',
                'page_id' => 3,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Identification of nonliteral language in social media: A case study on sarcasm ',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Muresan, S., Gonzalez-Ibanez, R., Ghosh, D., Wacholder, N.',
                'page_id' => 3,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Rain or shine? Forecasting search process performance in exploratory search tasks',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Shah, C., Hendahewa, C., González-Ibáñez, R.',
                'page_id' => 3,
            ]
        );
        //Victor
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Optimization of electrical distribution feeders using simulated annealing',
                'investigationYear' => '2004',
                'investigationAuthors' => 'Victor Parada, Jacques A Ferland, Miguel Arias, Keith Daniels',
                'page_id' => 4,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A cross-cultural assessment of three theories of pro-environmental behavior: A comparison between business students of Chile and the United States',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Mark Cordano, Stephanie Welcomer, Robert F Scherer, Lorena Pradenas, Víctor Parada',
                'page_id' => 4,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Understanding cultural differences in the antecedents of pro-environmental behavior: A comparative analysis of business students in the United States and Chile',
                'investigationYear' => '2010',
                'investigationAuthors' => 'Mark Cordano, Stephanie Welcomer, Robert Scherer, Lorena Pradenas, Victor Parada',
                'page_id' => 4,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Mitigation of greenhouse gas emissions in vehicle routing problems with backhauling',
                'investigationYear' => '2013',
                'investigationAuthors' => 'Lorena Pradenas, Boris Oportus, VíCtor Parada',
                'page_id' => 4,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A maturity model for assessing the use of ICT in school education',
                'investigationYear' => '2013',
                'investigationAuthors' => 'Mauricio Solar, Jorge Sabattin, Victor Parada',
                'page_id' => 4,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Solution for the constrained guillotine cutting problem by simulated annealing',
                'investigationYear' => '1998',
                'investigationAuthors' => 'Victor Parada, Mauricio Sepúlveda, Mauricio Solar, Arlindo Gómes',
                'page_id' => 4,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'An evolutionary algorithm for the multi-objective pick-up and delivery pollution-routing problem',
                'investigationYear' => '2019',
                'investigationAuthors' => 'Bravo, M., Rojas, L.P., Parada, V.',
                'page_id' => 6,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Assessing the energy benefit of using a wind turbine micro-siting model',
                'investigationYear' => '2018',
                'investigationAuthors' => 'Parada, L., Herrera, C., Flores, P., Parada, V.',
                'page_id' => 6,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Novel Methods Generated by Genetic Programming for the Guillotine-Cutting Problem',
                'investigationYear' => '2018',
                'investigationAuthors' => 'Bertolini, V., Rey, C., Sepulveda, M., Parada, V.',
                'page_id' => 6,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Wind farm layout optimization using a Gaussian-based wake model',
                'investigationYear' => '2017',
                'investigationAuthors' => 'Parada, L., Herrera, C., Flores, P., Parada, V.',
                'page_id' => 6,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Automatic design of algorithms for the traveling salesman problem',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Loyola, C., Sepúlveda, M., Solar, M., Lopez, P., Parada, V.',
                'page_id' => 6,
            ]
        );
        //J.L
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A prototype question answering system using syntactic and semantic information for answer retrieval',
                'investigationYear' => '2002',
                'investigationAuthors' => 'Enrique Alfonseca, Marco De Boni, José-Luis Jara-Valencia, Suresh Manandhar',
                'page_id' => 7,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Regional differences in dynamic cerebral autoregulation in the healthy brain assessed by magnetic resonance imaging',
                'investigationYear' => '2013',
                'investigationAuthors' => 'Mark A Horsfield, José L Jara, Nazia P Saeed, Ronney B Panerai, Thompson G Robinson',
                'page_id' => 7,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Dynamic cerebral autoregulation following acute ischaemic stroke: comparison of transcranial doppler and magnetic resonance imaging techniques',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Ronney B Panerai, Jose L Jara, Nazia P Saeed, Mark A Horsfield, Thompson G Robinson',
                'page_id' => 7,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A new model-free index of dynamic cerebral blood flow autoregulation',
                'investigationYear' => '2014',
                'investigationAuthors' => 'Max Chacón, José Luis Jara, Ronney B Panerai',
                'page_id' => 7,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Crisp classifiers vs. fuzzy classifiers: A statistical study',
                'investigationYear' => '2009',
                'investigationAuthors' => 'JL Jara, Rodrigo Acevedo-Crespo',
                'page_id' => 7,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Empirical evaluation of three machine learning method for automatic classification of neoplastic diagnoses',
                'investigationYear' => '2011',
                'investigationAuthors' => 'José Luis Jara, Max Chacón, Gonzalo Zelaya',
                'page_id' => 7,
            ]
        );
        //Scopus
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Reproducibility of dynamic cerebral autoregulation parameters: a multi-centre, multi-method study',
                'investigationYear' => '2018',
                'investigationAuthors' => 'Sanders, M.L., Claassen, J.A.H.R., Aries, M., Panerai, R.B., Elting, J.W.J.',
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Increasing the contrast-to-noise ratio of MRI signals for regional assessment of dynamic cerebral autoregulation',
                'investigationYear' => '2018',
                'investigationAuthors' => 'Jara, J.L., Saeed, N.P., Panerai, R.B., Robinson, T.G.',
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Comparing models of spontaneous variations, maneuvers and indexes to assess dynamic cerebral autoregulation',
                'investigationYear' => '2018',
                'investigationAuthors' => 'Chacón, M., Noh, S.-H., Landerretche, J., Jara, J.L.',
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Non-linear models for the detection of impaired cerebral blood flow autoregulation',
                'investigationYear' => '2018',
                'investigationAuthors' => 'Chacón, M., Jara, J.L., Miranda, R., Katsogridakis, E., Panerai, R.B.',
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Dynamic cerebral autoregulation following acute ischaemic stroke: Comparison of transcranial Doppler and magnetic resonance imaging techniques',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Panerai, R.B., Jara, J.L., Saeed, N.P., Horsfield, M.A., Robinson, T.G.',
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Analysis of the influence of systemic and intracranial pressure in patients with severe head injury using linear and non-linear models',
                'investigationYear' => '2015',
                'investigationAuthors' => 'Chacón, M., Jara, J.L., Varas, N., Panerai, R.B.',
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A new model-free index of dynamic cerebral blood flow autoregulation',
                'investigationYear' => '2014',
                'investigationAuthors' => 'Chacón, M., Jara, J., Panerai, R.B.',
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Regional Differences in Dynamic Cerebral Autoregulation in the Healthy Brain Assessed by Magnetic Resonance Imaging',
                'investigationYear' => '2013',
                'investigationAuthors' => 'Horsfield, M.A., Jara, J.L., Saeed, N.P., Panerai, R.B., Robinson, T.G.',
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Empirical evaluation of three machine learning method for automatic classification of neoplastic diagnoses | [Evaluación empírica de tres métodos de aprendizaje automático para clasificar automáticamente diagnósticos de neoplasias]',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Jara, J.L., Chacón, M., Zelaya, G.',
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Crisp classifiers vs. fuzzy classifiers: A statistical study',
                'investigationYear' => '2009',
                'investigationAuthors' => 'Jara, J.L., Acevedo-Crespo, R.',
                'page_id' => 9,
            ]
        );

//HECTOR ANTILLANCA 10scolar 11 12 scopus
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Un marco sistémico para orientar el diseño de artefactos del diálogo',
                'investigationYear' => '2008',
                'investigationAuthors' => 'Lobos, E.L., Ponce, H., Antillanca, H.',
                'page_id' => 12,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Refining temporal criteria to classify collaborative systems',
                'investigationYear' => '2008',
                'investigationAuthors' => 'Antillanca, H.B., Fuller, D.A..',
                'page_id' => 12,
            ]
        );
//LEONEL MEDINA13 14 15
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Ore grade estimation by feature selection and voting using boundary detection in digital image analysis',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Claudio A Perez, Pablo A Estévez, Pablo A Vera, Luis E Castillo, Carlos M Aravena, Daniel A Schulz, Leonel E Medina',
                'page_id' => 13,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Stochastic facilitation of artificial tactile sensation in primates',
                'investigationYear' => '2012',
                'investigationAuthors' => 'Leonel E Medina, Mikhail A Lebedev, Joseph E O´Doherty, Miguel AL Nicolelis',
                'page_id' => 13,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Linear versus nonlinear neural modeling for 2-D pattern recognition',
                'investigationYear' => '2005',
                'investigationAuthors' => 'Claudio A Perez, GD Gonzalez, LE Medina, Francisco J Galdames',
                'page_id' => 13,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Effects of frequency-dependent membrane capacitance on neural excitability',
                'investigationYear' => '2015',
                'investigationAuthors' => 'Bryan Howell, Leonel E Medina, Warren M Grill',
                'page_id' => 13,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Coincidence-enhanced stochastic resonance: experimental evidence challenges the psychophysical theory behind stochastic resonance',
                'investigationYear' => '2007',
                'investigationAuthors' => 'Claudio A Perez, Theodore E Cohn, Leonel E Medina, José R Donoso',
                'page_id' => 13,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A critical experimental study of the classical tactile threshold theory',
                'investigationYear' => '2010',
                'investigationAuthors' => 'Claudio A Perez, José R Donoso, Leonel E Medina',
                'page_id' => 13,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Volume conductor model of transcutaneous electrical stimulation with kilohertz signals',
                'investigationYear' => '2014',
                'investigationAuthors' => 'Leonel E Medina, Warren M Grill',
                'page_id' => 13,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Nerve excitation using an amplitude-modulated signal with kilohertz-frequency carrier and non-zero offset',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Leonel E Medina, Warren M Grill',
                'page_id' => 13,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Phantom model of transcutaneous electrical stimulation with kilohertz signals',
                'investigationYear' => '2015',
                'investigationAuthors' => 'Leonel E Medina, Warren M Grill',
                'page_id' => 13,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Mammalian Motor Nerve Fibers, Models of',
                'investigationYear' => '2015',
                'investigationAuthors' => 'Leonel E Medina, Warren M Grill',
                'page_id' => 13,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Circuit and volume conductor models of transcutaneous electrical stimulation',
                'investigationYear' => '2013',
                'investigationAuthors' => 'Leonel E Medina, Warren M Grill',
                'page_id' => 13,
            ]
        );
        //SCOPUS
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Nerve excitation using an amplitude-modulated signal with kilohertz-frequency carrier and non-zero offset',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Leonel E Medina, Warren M Grill',
                'page_id' => 15,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Effects of frequency-dependent membrane capacitance on neural excitability',
                'investigationYear' => '2015',
                'investigationAuthors' => 'Bryan Howell, Leonel E Medina, Warren M Grill',
                'page_id' => 15,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Phantom model of transcutaneous electrical stimulation with kilohertz signals',
                'investigationYear' => '2015',
                'investigationAuthors' => 'Leonel E Medina, Warren M Grill',
                'page_id' => 15,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Volume conductor model of transcutaneous electrical stimulation with kilohertz signals',
                'investigationYear' => '2014',
                'investigationAuthors' => 'Leonel E Medina, Warren M Grill',
                'page_id' => 15,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Circuit and volume conductor models of transcutaneous electrical stimulation',
                'investigationYear' => '2013',
                'investigationAuthors' => 'Leonel E Medina, Warren M Grill',
                'page_id' => 15,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Ore grade estimation by feature selection and voting using boundary detection in digital image analysis',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Claudio A Perez, Pablo A Estévez, Pablo A Vera, Luis E Castillo, Carlos M Aravena, Daniel A Schulz, Leonel E Medina',
                'page_id' => 15,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Stochastic facilitation of artificial tactile sensation in primates',
                'investigationYear' => '2012',
                'investigationAuthors' => 'Leonel E Medina, Mikhail A Lebedev, Joseph E O´Doherty, Miguel AL Nicolelis',
                'page_id' => 15,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Coincidence-enhanced stochastic resonance: experimental evidence challenges the psychophysical theory behind stochastic resonance',
                'investigationYear' => '2007',
                'investigationAuthors' => 'Claudio A Perez, Theodore E Cohn, Leonel E Medina, José R Donoso',
                'page_id' => 15,
            ]
        );
                DB::table('investigations')->insert(
            [
                'investigationName' => 'Linear versus nonlinear neural modeling for 2-D pattern recognition',
                'investigationYear' => '2005',
                'investigationAuthors' => 'Claudio A Perez, GD Gonzalez, LE Medina, Francisco J Galdames',
                'page_id' => 15,
            ]
        );
                DB::table('investigations')->insert(
            [
                'investigationName' => 'A critical experimental study of the classical tactile threshold theory',
                'investigationYear' => '2010',
                'investigationAuthors' => 'Claudio A Perez, José R Donoso, Leonel E Medina',
                'page_id' => 15,
            ]
        );
//GONZALO ACUÑA    16 17 18    
        DB::table('investigations')->insert(
            [
                'investigationName' => 'One member of a gro‐ESL‐like chaperonin multigene family in Bradyrhizobium japonicum is co‐regulated with symbiotic nitrogen fixation genes.',
                'investigationYear' => '1993',
                'investigationAuthors' => 'HM Fischer, M Babst, T Kaspar, G Acuna, F Arigoni, H Hennecke',
                'page_id' => 16,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Detection of community structures in networks via global optimization',
                'investigationYear' => '2005',
                'investigationAuthors' => 'Andres Medus, Guillermo Acuña, CO Dorso',
                'page_id' => 16,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Forecasting ozone daily maximum levels at Santiago, Chile',
                'investigationYear' => '1998',
                'investigationAuthors' => 'Héctor Jorquera, Ricardo Pérez, Aldo Cipriano, Andrés Espejo, M Victoria Letelier, Gonzalo Acuña',
                'page_id' => 16,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Classification of seismic signals at Villarrica volcano (Chile) using neural networks and genetic algorithms',
                'investigationYear' => '2009',
                'investigationAuthors' => 'Gloria Curilem, Jorge Vergara, Gustavo Fuentealba, Gonzalo Acuña, Max Chacón',
                'page_id' => 16,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Dynamic modelling and simulation of semi-autogenous mills',
                'investigationYear' => '2009',
                'investigationAuthors' => 'JL Salazar, L Magne, G Acuna, F Cubillos',
                'page_id' => 16,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Static and dynamic neural network models for estimating biomass concentration during thermophilic lactic acid bacteria batch cultures',
                'investigationYear' => '1998',
                'investigationAuthors' => 'Gonzalo Acuña, Eric Latrille, Catherine Béal, Georges Corrieu',
                'page_id' => 16,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Moving horizon state estimation with global convergence using interval techniques: application to biotechnological processes',
                'investigationYear' => '2003',
                'investigationAuthors' => 'Héctor Valdés-González, Jean-Marie Flaus, Gonzalo Acuña',
                'page_id' => 16,
            ]
        );                                
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A hybrid representation approach for modelling complex dynamic bioprocesses',
                'investigationYear' => '2000',
                'investigationAuthors' => 'J Thibault, G Acuna, R Perez-Correa, H Jorquera, P Molin, E Agosin',
                'page_id' => 16,
            ]
        );
                DB::table('investigations')->insert(
            [
                'investigationName' => 'Cloning, sequencing, and mutational analysis of the Bradyrhizobium japonicum fumC-like gene: evidence for the existence of two different fumarases',
                'investigationYear' => '1991',
                'investigationAuthors' => 'Gonzalo Acuña, Sabine Ebeling, Hauke Hennecke',
                'page_id' => 16,
            ]
        );  
                DB::table('investigations')->insert(
            [
                'investigationName' => 'Neural networks and support vector machine models applied to energy consumption optimization in semiautogeneous grinding',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Millaray Curilem, Gonzalo Acuña, Francisco Cubillos, Eduardo Vyhmeister',
                'page_id' => 16,
            ]
        );    



//CAROLINA BONACIC 19 20 21
        DB::table('investigations')->insert(
            [
                'investigationName' => 'S4 Applications Simulator for Performance Evaluation  ',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Gallardo, R.S., Bonacic, C., Marin, M.',
                'page_id' => 20,
            ]
        ); 
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A Hybrid Load-Balancing Solution for S4 Stream Processing Systems',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Cantergiani, P.G., Castro, C.B., Marin, M.',
                'page_id' => 20,
            ]
        ); 
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Survey on Simulation for Mobile Ad-Hoc Communication for Disaster Scenarios',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Rosas, E., Hidalgo, N., Gil-Costa, V., (...), Marcondes, C., Marin, O.',
                'page_id' => 20,
            ]
        ); 
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Simulating streaming software applications running on clusters of processors and smartphone',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Soto, R., Bonacic, C., Marin, M., Gil-Costa, V.',
                'page_id' => 20,
            ]
        ); 
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Multithreaded processing in dynamic inverted indexes for web search engines',
                'investigationYear' => '2015',
                'investigationAuthors' => 'Bonacic, C., Bustos, D., Gil-Costa, V., Marin, M., Sepulveda, V.',
                'page_id' => 20,
            ]
        ); 
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A real-time web observatory for cycling safety: A tool for supporting research and decision making of people and organizations',
                'investigationYear' => '2015',
                'investigationAuthors' => 'González-Ibáñez, R., Bonacic, C., Fernández, Á.',
                'page_id' => 20,
            ]
        ); 
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Distributed text search using suffix arrays',
                'investigationYear' => '2014',
                'investigationAuthors' =>   'Arroyuelo, D., Bonacic, C., Gil-Costa, V., Marin, M., Navarro, G.',
                'page_id' => 20,
            ]
        ); 
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A graph-based cache for large-scale similarity search engines',
                'investigationYear' => '2018',
                'investigationAuthors' => 'Gil-Costa, V., Marin, M., Bonacic, C., Solar, R.',
                'page_id' => 21,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Neural networks and support vector machine models applied to energy consumption optimization in semiautogeneous grinding',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Millaray Curilem, Gonzalo Acuña, Francisco Cubillos, Eduardo Vyhmeister',
                'page_id' => 21,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Neural networks and support vector machine models applied to energy consumption optimization in semiautogeneous grinding',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Millaray Curilem, Gonzalo Acuña, Francisco Cubillos, Eduardo Vyhmeister',
                'page_id' => 21,
            ]
        ); 



//MAX CHACON

//FERNANDO CONTRERAS

//MARIO INOSTROZA                
                // FERNANDA KRI 

    // SCOPUS   

        DB::table('investigations')->insert(
            [
                'investigationName' => 'A shared-memory multiprocessor scheduling algorithm',
                'investigationYear' => '2006',
                'investigationAuthors' => 'Zuccar, I., Solar, M., Kri, F., Parada, V.',
                'page_id' => 35,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Overview of metaheuristics methods in compilation',
                'investigationYear' => '2005',
                'investigationAuthors' => 'Kri, F., Gómez, C., Caro, P.',
                'page_id' => 35,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Genetic instruction scheduling and register allocation',
                'investigationYear' => '2004',
                'investigationAuthors' => 'Kri, F., Feeley, M.',
                'page_id' => 35,
            ]
        );
 // EDMUNDO LEIVA-LOBOS
        DB::table('investigations')->insert(
            [
                'investigationName' => 'RBox: An experimentation tool for creating event-driven recommender algorithms for web 2.0',
                'investigationYear' => '2015',
                'investigationAuthors' => 'Leiva-Lobos, E.P., Palomino, M.',
                'page_id' => 38,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'The 3-Ontology: A framework to place cooperative awareness',
                'investigationYear' => '2002',
                'investigationAuthors' => 'Leiva-Lobos, E.P., Covarrubias, E.',
                'page_id' => 38,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Augmenting and multiplying spaces for creative design',
                'investigationYear' => '1997',
                'investigationAuthors' => 'Leiva-Lobos, Edmundo P., De Michelis, Giorgio, Covarrubias, Eliana',
                'page_id' => 38,
            ]
        );
// MAURICIO MARIN
        // GOOGLE SCHOLAR
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Crawling a country: better strategies than breadth-first for web page ordering',
                'investigationYear' => '2005',
                'investigationAuthors' => 'Ricardo Baeza-Yates, Carlos Castillo, Mauricio Marin, Andrea Rodriguez',
                'page_id' => 30,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Efficient algorithms for many-body hard particle molecular dynamics',
                'investigationYear' => '1993',
                'investigationAuthors' => 'Mauricio Marı́n, Dino Risso, Patricio Cordero',
                'page_id' => 30,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Scheduling algorithms for Web crawling',
                'investigationYear' => '2004',
                'investigationAuthors' => 'Carlos Castillo, Mauricio Marin, Andrea Rodriguez, Ricardo Baeza-Yates',
                'page_id' => 30,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'An empirical assessment of priority queues in event-driven molecular dynamics simulation',
                'investigationYear' => '1995',
                'investigationAuthors' => 'Mauricio Marín, Patricio Cordero',
                'page_id' => 30,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'New caching techniques for web search engines',
                'investigationYear' => '2010',
                'investigationAuthors' => 'Mauricio Marin, Veronica Gil-Costa, Carlos Gomez-Pantoja',
                'page_id' => 30,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Parallel query processing on distributed clustering indexes',
                'investigationYear' => '2009',
                'investigationAuthors' => 'Veronica Gil-Costa, Mauricio Marin, Nora Reyes',
                'page_id' => 30,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'kNN query processing in metric spaces using GPUs',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Ricardo J Barrientos, José I Gómez, Christian Tenllado, Manuel Prieto Matias, Mauricio Marin',
                'page_id' => 30,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'High-performance distributed inverted files',
                'investigationYear' => '2007',
                'investigationAuthors' => 'Mauricio Marin, Veronica Gil-Costa',
                'page_id' => 30,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Scheduling metric-space queries processing on multi-core processors',
                'investigationYear' => '2010',
                'investigationAuthors' => 'Veronica Gil-Costa, Ricardo Barrientos, Mauricio Marin, Carolina Bonacic',
                'page_id' => 30,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Sync/async parallel search for the efficient design and construction of web search engines',
                'investigationYear' => '2010',
                'investigationAuthors' => 'Mauricio Marin, Veronica Gil-Costa, Carolina Bonacic, Ricardo Baeza-Yates, Isaac D Scherson',
                'page_id' => 30,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'To index or not to index: time-space trade-offs in search engines with positional ranking functions',
                'investigationYear' => '2012',
                'investigationAuthors' => 'Diego Arroyuelo, Senén González, Mauricio Marin, Mauricio Oyarzún, Torsten Suel',
                'page_id' => 30,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'High-performance priority queues for parallel crawlers',
                'investigationYear' => '2008',
                'investigationAuthors' => 'Mauricio Marin, Rodrigo Paredes, Carolina Bonacic',
                'page_id' => 30,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Event-driven hard-particle molecular dynamics using bulk-synchronous parallelism',
                'investigationYear' => '1997',
                'investigationAuthors' => 'Mauricio Marín',
                'page_id' => 30,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Capacity planning for vertical search engines: An approach based on coloured petri nets',
                'investigationYear' => '2012',
                'investigationAuthors' => 'Veronica Gil-Costa, Jair Lobos, Alonso Inostrosa-Psijas, Mauricio Marin',
                'page_id' => 30,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Capacity planning for vertical search engines: An approach based on coloured petri nets',
                'investigationYear' => '2012',
                'investigationAuthors' => 'Veronica Gil-Costa, Jair Lobos, Alonso Inostrosa-Psijas, Mauricio Marin',
                'page_id' => 30,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A search engine index for multimedia content',
                'investigationYear' => '2008',
                'investigationAuthors' => 'Mauricio Marin, Veronica Gil-Costa, Carolina Bonacic',
                'page_id' => 30,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Distributed search based on self-indexed compressed text',
                'investigationYear' => '2012',
                'investigationAuthors' => 'Diego Arroyuelo, Veronica Gil-Costa, Senén González, Mauricio Marin, Mauricio Oyarzún',
                'page_id' => 30,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Time Warp on BSP computers',
                'investigationYear' => '1998',
                'investigationAuthors' => 'Mauricio Marín',
                'page_id' => 30,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Distributing a metric-space search index onto processors',
                'investigationYear' => '2010',
                'investigationAuthors' => 'Mauricio Marin, Flavio Ferrarotti, Veronica Gil-Costa',
                'page_id' => 30,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Searching and updating metric space databases using the parallel EGNAT',
                'investigationYear' => '2007',
                'investigationAuthors' => 'Mauricio Marin, Roberto Uribe, Ricardo Barrientos',
                'page_id' => 30,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'An index data structure for searching in metric space databases',
                'investigationYear' => '2006',
                'investigationAuthors' => 'Roberto Uribe, Gonzalo Navarro, Ricardo J Barrientos, Mauricio Marín',
                'page_id' => 30,
            ]
        );
    }
}