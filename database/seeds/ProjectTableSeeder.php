<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('projects')->insert(
            [
                'projectName' => 'Enhancing learning and teaching for future competences of online inquiry in multiple domains (iFuCo)',
                'memberName' => 'Roberto González-Ibáñez, Eero Sormunen, Carita Kiili, Marja Vauras, Mario Quintanilla',
                'projectInit' => '2016-01-01',
                'projectEnd' => '2018-12-31',
                'projectDescription' => 'IFuCo-project has three main objectives: to build a deeper theoretical understanding of students’ online inquiry competences, to develop novel instructional model to enhance learning and teaching of future competences in online inquiry in primary education, and to create a long term research network and collaboration between Finland and Chile to meet the global challenges of future education. To reach these goals we will conduct two multidisciplinary studies: a large scale cross-sectional survey for students and teachers and an intervention study to test the efficacy of the developed instructional model for promoting online inquiry competencies. The results on students’ online inquire competence, teachers’ pedagogical practices, and the effectiveness of the instructional model can be used in developing future school curricula and teacher education both in Chile and Finland.',
                'user_id' => 1,
                
            ]
        );
        //2
        DB::table('projects')->insert(
            [
                'projectName' => 'ENCHANT: Evaluation of iNterfaces for interaCting witH digitAl iNformation objecTs',
                'memberName' => 'Roberto González-Ibáñez, Jose Luis Varela, Carlos Barrera',
                'projectInit' => '2015-01-01',
                'projectEnd' => '2017-12-31',
                'projectDescription' => 'ENCHANT is a three-year project (2015-2017) that focuses on studying and designing systems for natural interactions with information search systems. The project involves the development and evaluation of body-controlled, touch-based, virtual-reality-based, visual-based, and augmented-reality-based interfaces for interacting with search results and information objects, and for organizing information. The goal of the project is to understand the impact of different interaction forms that are typically intended to close the interaction gap between users and machines. The ENCHANT project is partially funded by the DICYT (Dirección de Investigación Científica y Tecnológica), Code 061519GI',
                'user_id' => 1,
                
            ]
        );
        //3
        DB::table('projects')->insert(
            [
                'projectName' => 'Real-Time Web Observatories',
                'memberName' => 'Roberto González-Ibáñez, Carolina Bonacic',
                'projectInit' => '2014-01-01',
                'projectEnd' => '2014-12-31',
                'projectDescription' => 'Human-generated content on the Web has increased over the last decade. In part, this situation has been powered by the proliferation of social networking services and mobile computing. In the context of citizen safety, everyday people share information about safety-related events such as natural disasters, accidents, and theft. This information can have valuable implications for the community and authorities, however, processing and making sense of such volume of information are difficult tasks for machines and likely impossible for humans. In this project we developed a real-time Web observatory that uses publicly available information found in social networking services such as Twitter to automatically provide visualizations and indicators of safety-related events for the particular case of cyclists as perceived by the citizens. This Web observatory is built on top of a scalable and robust architecture using state-of-the-art technology for stream processing. We demonstrate the potential applications of this design with two implementations thought to aid researchers, decision makers, and people in general.',
                'user_id' => 1,
                
            ]
        );
        //4
        DB::table('projects')->insert(
            [
                'projectName' => 'Collaborative Information Seeking Support and Services in Libraries',
                'memberName' => 'Roberto González-Ibáñez, Carlos Contreras, Sergio Ramos, Claudio Rodríguez, Felipe Gatica, Carlos Herrera, Mauricio Sepúlveda, Lucas Parada, Carlos Rey',
                'projectInit' => '2011-06-01',
                'projectEnd' => '2015-09-30',
                'projectDescription' => null,
                'user_id' => 1,
                
            ]
        );
        //5
        DB::table('projects')->insert(
            [
                'projectName' => 'Automatic design of algorithms',
                'memberName' => 'Víctor Parada Daza, Pedro Palominos, Luis Quezada, Cristian Mateluna',
                'projectInit' => '2014-01-01',
                'projectEnd' => '2014-12-31',
                'projectDescription' => 'There is a variety of combinatorial optimization problems for which any efficient algorithm capable of ccurately resolve any input data of the problem, has been found so far. Such problems are associated with the decision making in large part of the production and services processes and are studied in the field of management science, computer science and operations research. Typical cases arise in the optimal use of raw material, the optimal use of time; the optimal scheduling of human resources, etc. Situations like these have been extensively studied in the literature, giving rise to a particular class of problems known as NP-complete, which in turn, is the origin of the famous conjecture of NP-completeness. Despite a relentless search for the last 40 years, an efficient algorithm for any of the problems of the family has not been found yet, in fact, one algorithm would be sufficient to activate a complex network of knowledge that interconnects all problems, triggering a specific and efficient algorithm for each problem belonging to the class. Knowing that the computational power of processors has increased enormously since the NP-completeness was detected, one wonders if the task of finding efficient algorithms could be performed by machines. We argue that the creation of an algorithm for solving an optimization problem can also be seen as an optimization problem. In this case, the feasible solutions of the optimization problem are the different algorithms that solve the problem, while the objective function corresponds to the characteristics of the algorithms that we are looking for. In this project, using a suitable search method, several algorithms are automatically produced for various combinatorial optimization problems.',
                'user_id' => 2,
                
            ]
        );          
        //6
        DB::table('projects')->insert(
            [
                'projectName' => 'Metaheuristics and Natural Inspired Computing',
                'memberName' => 'Víctor Parada Daza, Fernando Michel, Carlos Herrera, Pierre Lopez, Lorena Pradenas, Christian Artigues, Margauxx Nattaf, André Thomas, Mauricio Solar, Walter Farina',
                'projectInit' => '2014-01-01',
                'projectEnd' => '2014-12-31',
                'projectDescription' => 'Los métodos metaheurísticos, son métodos que permiten encontrar soluciones aproximadas para problemas de optimización combinatoria. Por lo tanto son métodos o algoritmos que permites solucionar problemas que o bien tienen una cantidad expo de soluciones posibles, o bien, son difíciles de abordad numéricamente. Son de naturaleza variada debido a que se originan en diversos campos de a ciencia y de la ingeniería.',
                'user_id' => 2,
            ]
        );
        //7
        DB::table('projects')->insert(
            [
                'projectName' => 'Engineering Problems',
                'memberName' => 'Víctor Parada Daza, Lorena Praderas, Mauricio Bravo',
                'projectInit' => '2017-01-01',
                'projectEnd' => '2017-12-31',
                'projectDescription' => 'The objective is to approach complex engineering optimization problems by heuristic algorithms.',
                'user_id' => 2,
                
            ]
        ); 
        //8
        DB::table('projects')->insert(
            [
                'projectName' => 'Green Route',
                'memberName' => 'Víctor Parada Daza',
                'projectInit' => '2017-01-01',
                'projectEnd' => '2017-12-31',
                'projectDescription' => 'The objective is to approach complex engineering optimization problems by heuristic algorithms.',
                'user_id' => 2,
                
            ]
        );
        //9
        DB::table('projects')->insert(
            [
                'projectName' => 'nonlinear assessment of cerebral autoregulation',
                'memberName' => 'José Luis Jara, Max Chacon, Emmanuel Katsogridakis, Ronney Panerai, Ronney Panerai',
                'projectInit' => '2018-01-10',
                'projectEnd' => '2018-10-30',
                'projectDescription' => null,
                'user_id' => 10,
            ]
        );
        //C.B 10 Research
        DB::table('projects')->insert(
            [
                'projectName' => 'Real-Time Web Observatories',
                'memberName' => 'Carolina Bonacic Castro, Roberto González-Ibáñez',
                'projectInit' => '2014-01-01',
                'projectEnd' => '2014-12-31',
                'projectDescription' => 'Human-generated content on the Web has increased over the last decade. In part, this situation has been powered by the proliferation of social networking services and mobile computing. In the context of citizen safety, everyday people share information about safety-related events such as natural disasters, accidents, and theft. This information can have valuable implications for the community and authorities, however, processing and making sense of such volume of information are difficult tasks for machines and likely impossible for humans. In this project we developed a real-time Web observatory that uses publicly available information found in social networking services such as Twitter to automatically provide visualizations and indicators of safety-related events for the particular case of cyclists as perceived by the citizens. This Web observatory is built on top of a scalable and robust architecture using state-of-the-art technology for stream processing. We demonstrate the potential applications of this design with two implementations thought to aid researchers, decision makers, and people in general.',
                'user_id' => 6
            ]
        );
        //11 Research
        DB::table('projects')->insert(
            [
                'projectName' => 'Fondef Idea ID15I10560',
                'memberName' => 'Carolina Bonacic Castro, Nicolas Idalgo, Erika Rosas, Mauricio Marín',
                'projectInit' => null,
                'projectEnd' => null,
                'projectDescription' => null,
                'user_id' => 6
            ]
        );
        //12
        DB::table('projects')->insert(
            [
                'projectName' => 'Parameters calibration for the Artificial Bioindicator Model, a new classifier for network intrusion detection',
                'memberName' => 'Max Chacón Pacheco, Pedro Pablo Pinacho Davidson, Christian Blum, Jose Lozano, Iván Pau',
                'projectInit' => '2012-12-31',
                'projectEnd' => '2013-11-30',
                'projectDescription' => "El objetivo del proyecto consiste en mejorar el modelo de Especies Indicadoras Artificiales (EIA), logrando con esto resultados competitivos con respecto a algoritmos clasificadores en el estado del arte de la detección de intrusos en redes de computadoras. En términos simples el modelo EIA corresponde al desarrollo de una algoritmo clasificador que aprende de forma autónoma a diferenciar un flujo de eventos normales de los que son anormales. Pedro Pinacho Davidson es parcialmente financiado por Vicerrectoría de Investigación y Postgrado de Universidad Santo Tomás Chile.",
                'user_id' => 7
            ]
        );
        //13
        DB::table('projects')->insert(
            [
                'projectName' => 'Detection of patients with functional dyspepsia using wavelet transform applied to their electrogastrogram',
                'memberName' => 'Max Chacón Pacheco, Ana María Madrid',
                'projectInit' => null,
                'projectEnd' => null,
                'projectDescription' => null,
                'user_id' => 7
            ]
        );
        //14
        DB::table('projects')->insert(
            [
                'projectName' => 'nonlinear assessment of cerebral autoregulation',
                'memberName' => 'Max Chacón Pacheco, Emmanuel Katsogridakis, José Luis Jara, Ronney Panerai',
                'projectInit' => null,
                'projectEnd' => null,
                'projectDescription' => null,
                'user_id' => 7
            ]
        );
        //15
        DB::table('projects')->insert(
            [
                'projectName' => 'Development of methods and computational strategies for the Protein Structure Prediction Problem',
                'memberName' => 'Mario Inostroza-Ponta, Marcio Dorn, Bruno Borguesan, Mariana Oliveira, Leonardo De Lima Corrêa, Leonardo Alves Santos, Pedro Henrique Narloch, Bruno Grisci, Rodrigo Ligabue-Braun, Mariel Barbachan, Bruno Ferreira de Faria Alixandre, Bruno César Feltes',
                'projectInit' => null,
                'projectEnd' => null,
                'projectDescription' => null,
                'user_id' => 9
            ]
        );
        //16
        DB::table('projects')->insert(
            [
                'projectName' => 'SCT-Chile',
                'memberName' => 'Fernanda Kri Amar, Tatiana Sánchez D., Rodrigo Tomás Del Valle, Elisa Marchant, Elena Altieri',
                'projectInit' => null,
                'projectEnd' => null,
                'projectDescription' => null,
                'user_id' => 11
            ]
        );
        //17
        DB::table('projects')->insert(
            [
                'projectName' => 'Fondef Idea ID15I10560',
                'memberName' => 'Mauricio Marín, Nicolas Idalgo, Erika Rosas, Carolina Bonacic',
                'projectInit' => null,
                'projectEnd' => null,
                'projectDescription' => null,
                'user_id' => 13
            ]
        );
        //18
        DB::table('projects')->insert(
            [
                'projectName' => 'Similarity Caching',
                'memberName' => 'Mauricio Marín, Roberto Solar, Veronica Gil Costa',
                'projectInit' => null,
                'projectEnd' => null,
                'projectDescription' =>null,
                'user_id' => 13
            ]
        );
        //19 Obtenido del perfil del Diinf
        DB::table('projects')->insert(
            [
                'projectName' => 'Proyecto FONDEF IDeA IT13I20010',
                'memberName' => 'Alcides Quispe Sanca',
                'projectInit' => '2014-01-01',
                'projectEnd' => '2015-12-31',
                'projectDescription' => 'GEMS (Gestión Experimental de la Mejora de Software)',
                'user_id' => 15
            ]
        );
        //20
        DB::table('projects')->insert(
            [
                'projectName' => 'High performance Hermite function sparse regression',
                'memberName' => 'Fernando Rannou Fuentes, Pablo Enrique Roman, Miguel Cárcamo, Takeshi Asahi, Simon Casassus, Victor Moral',
                'projectInit' => null,
                'projectEnd' => null,
                'projectDescription' => 'Function approximation by regression in several dimension suffers from several problem, including the 1d Runge effect. Several regularization and properties are studied empirically at large scale problems.',
                'user_id' => 16
            ]
        );
        //21
        DB::table('projects')->insert(
            [
                'projectName' => 'Maximum entropy image synthesis for radio astronomy',
                'memberName' => 'Fernando Rannou Fuentes, Pablo Enrique Roman, Miguel Cárcamo, Simon Casassus, Victor Moral',
                'projectInit' => null,
                'projectEnd' => null,
                'projectDescription' => null,
                'user_id' => 16
            ]
        );
        //22
        DB::table('projects')->insert(
            [
                'projectName' => 'High performance Hermite function sparse regression',
                'memberName' => 'Pablo Román Asenjo, Fernando R Rannou, Miguel Cárcamo, Takeshi Asahi, Simon Casassus, Victor Moral',
                'projectInit' => null,
                'projectEnd' => null,
                'projectDescription' => 'Function approximation by regression in several dimension suffers from several problem, including the 1d Runge effect. Several regularization and properties are studied empirically at large scale problems.',
                'user_id' => 17
            ]
        );
        //23
        DB::table('projects')->insert(
            [
                'projectName' => 'Maximum entropy image synthesis for radio astronomy',
                'memberName' => 'Pablo Román Asenjo, Fernando R Rannou, Miguel Cárcamo, Simon Casassus, Victor Moral',
                'projectInit' => null,
                'projectEnd' => null,
                'projectDescription' => null,
                'user_id' => 17
            ]
        );
        //24
        DB::table('projects')->insert(
            [
                'projectName' => 'Protoplanetary disks',
                'memberName' => 'Pablo Román Asenjo, W. Lyra, C. M. Wright, Victor Moral, Henning Avenhaus, Matias Montesinos, Valentin Christiaens, Alwyn Wootten, Sebastian Marino, Sebastian Perez, S. Casassus, S. T. Maddison',
                'projectInit' => null,
                'projectEnd' => null,
                'projectDescription' => 'Observations and modeling of protoplanetary disks',
                'user_id' => 17
            ]
        );
        //25
        DB::table('projects')->insert(
            [
                'projectName' => 'Proyectos basales USA1298',
                'memberName' => 'Mónica Villanueva Ilufi',
                'projectInit' => null,
                'projectEnd' => null,
                'projectDescription' =>null,
                'user_id' => 18
            ]
        );
        //Hacia abajo proyectos obtenidos del perfil del diinf
        //26  
        DB::table('projects')->insert(
            [
                'projectName' => 'Plataforma de Apoyo a la Gestión de Emergencia y Aplicaciones',
                'memberName' => 'Carolina Bonacic Castro',
                'projectInit' => '2016-01-01',
                'projectEnd' => '2018-01-31',
                'projectDescription' => null,
                'user_id' => 6
            ]
        );
        //27
        DB::table('projects')->insert(
            [
                'projectName' => 'Analizador de Correos Electrónicos Utilizando Técnicas de las Ciencias del Comportamiento Humano',
                'memberName' => 'Carolina Bonacic Castro',
                'projectInit' => '2013-07-01',
                'projectEnd' => '2015-06-30',
                'projectDescription' => null,
                'user_id' => 6
            ]
        );
        //28
        DB::table('projects')->insert(
            [
                'projectName' => 'Procesamiento Masivo de Eventos en Tiempo Real',
                'memberName' => 'Carolina Bonacic Castro',
                'projectInit' => '2013-04-01',
                'projectEnd' => '2015-03-31',
                'projectDescription' => null,
                'user_id' => 6
            ]
        );
        //29
        DB::table('projects')->insert(
            [
                'projectName' => 'Observatorios Escalables de la Web en Tiempo Real',
                'memberName' => 'Carolina Bonacic Castro',
                'projectInit' => '2011-01-01',
                'projectEnd' => '2014-12-31',
                'projectDescription' => null,
                'user_id' => 6
            ]
        );
        //30
        DB::table('projects')->insert(
            [
                'projectName' => 'PMI-InEs-USACH',
                'memberName' => 'Carolina Bonacic Castro',
                'projectInit' => '2014-01-01',
                'projectEnd' => '2014-12-31',
                'projectDescription' => 'Observatorios Web de Seguridad Ciudadana',
                'user_id' => 6
            ]
        );
        //31
        DB::table('projects')->insert(
            [
                'projectName' => 'DICYT-USACH 061319BC',
                'memberName' => 'Carolina Bonacic Castro',
                'projectInit' => '2013-01-01',
                'projectEnd' => '2015-12-31',
                'projectDescription' => "Gestión eficiente para motores de búsqueda verticales",
                'user_id' => 6
            ]
        );
        //32
        DB::table('projects')->insert(
            [
                'projectName' => 'STIC-AMSUD 13STIC-09',
                'memberName' => 'Carolina Bonacic Castro',
                'projectInit' => '2013-01-01',
                'projectEnd' => '2014-12-31',
                'projectDescription' => "BioCloud-EEAmSud- Federated Cloud Computing for Bioinformatics: infrastructure, algorithms and application",
                'user_id' => 6
            ]
        );
        //Proyectos Perfil Diinf Academicos Gonzalo Acuña
        //33
        DB::table('projects')->insert(
            [
                'projectName' => 'FONDEF-IDeA CA13I10121',
                'memberName' => 'Gonzalo Acuña Leiva',
                'projectInit' => '2014-01-01',
                'projectEnd' => '2016-12-31',
                'projectDescription' => 'Herramienta de predicción de indicadores de disponibilidad para gestión de activos mineros',
                'user_id' => 5
            ]
        );
        //34
        DB::table('projects')->insert(
            [
                'projectName' => 'FONDEF-IDeA CA13I10148',
                'memberName' => 'Gonzalo Acuña Leiva',
                'projectInit' => '2014-01-01',
                'projectEnd' => '2016-12-31',
                'projectDescription' => "Desarrollo de un software basado en inteligencia artificial para estandarizar y optimizar procesos de selección masivos para mercados iberoamericanos",
                'user_id' => 5
            ]
        );
        //35
        DB::table('projects')->insert(
            [
                'projectName' => 'FONDECYT 1090316',
                'memberName' => 'Gonzalo Acuña Leiva',
                'projectInit' => '2009-01-01',
                'projectEnd' => '2012-12-31',
                'projectDescription' => 'Comparative study of Support Vector Machine and Neural Networks for Nonlinear System Identification and Observer Design',
                'user_id' => 5
            ]
        );
        //36
        DB::table('projects')->insert(
            [
                'projectName' => 'FONDEF D04I1084',
                'memberName' => 'Gonzalo Acuña Leiva',
                'projectInit' => '2005-01-01',
                'projectEnd' => '2008-12-31',
                'projectDescription' => 'Exploración Minera Mediante Vehículos Aéreos Autónomos',
                'user_id' => 5
            ]
        );
        //37
        DB::table('projects')->insert(
            [
                'projectName' => 'FONDECYT 1040208',
                'memberName' => 'Gonzalo Acuña Leiva',
                'projectInit' => '2004-01-01',
                'projectEnd' => '2006-12-31',
                'projectDescription' => 'Identificación de parámetros variantes en el tiempo y estimación de estado en sistemas complejos utilizando modelos neuronales de caja gris',
                'user_id' => 5
            ]
        );
        //38
        DB::table('projects')->insert(
            [
                'projectName' => 'FONDEF D02I1077',
                'memberName' => 'Gonzalo Acuña Leiva',
                'projectInit' => '2003-01-01',
                'projectEnd' => '2005-12-31',
                'projectDescription' => 'Sistema de control optimizante para plantas de molienda semiautógena',
                'user_id' => 5
            ]
        );
        //39
        DB::table('projects')->insert(
            [
                'projectName' => 'FONDECYT 1010179',
                'memberName' => 'Gonzalo Acuña Leiva',
                'projectInit' => '2001-01-01',
                'projectEnd' => '2003-12-31',
                'projectDescription' => 'Estimación de estado y de parámetros en procesos complejos mediante métodos numéricos y redes conexionistas',
                'user_id' => 5
            ]
        );
        //40
        DB::table('projects')->insert(
            [
                'projectName' => 'ECOS-CONICYT',
                'memberName' => 'Gonzalo Acuña Leiva',
                'projectInit' => '1999-01-01',
                'projectEnd' => '2002-12-31',
                'projectDescription' => 'Estimación, control y supervisión de procesos biotecnológicos agroalimentarios',
                'user_id' => 5
            ]
        );
        //41
        DB::table('projects')->insert(
            [
                'projectName' => 'FONDECYT 1980667',
                'memberName' => 'Gonzalo Acuña Leiva',
                'projectInit' => '1998-01-01',
                'projectEnd' => '2000-12-31',
                'projectDescription' => "Reconciliación de datos y desarrollo de sensores virtuales en biotecnología",
                'user_id' => 5
            ]
        );
        //42
        DB::table('projects')->insert(
            [
                'projectName' => 'FONDEF: D96/1022',
                'memberName' => 'Gonzalo Acuña Leiva',
                'projectInit' => '1996-01-01',
                'projectEnd' => '1999-12-31',
                'projectDescription' => "Modelamiento matemático: cálculo distribuido, redes neuronales y aplicaciones industriales",
                'user_id' => 5
            ]
        );
        //43
        DB::table('projects')->insert(
            [
                'projectName' => 'FONDECYT 1961299',
                'memberName' => 'Gonzalo Acuña Leiva',
                'projectInit' => '1996-01-01',
                'projectEnd' => '1997-12-31',
                'projectDescription' => "Uso de redes neuronales para la modelación de variables biológicas en fermentación sobre sustrato sólido",
                'user_id' => 5
            ]
        );
        //44
        DB::table('projects')->insert(
            [
                'projectName' => 'PaDMetBio: Parallel and Distributed Metaheuritics for Structural Bioinformatic',
                'memberName' => 'Mario Inostroza-Ponta',
                'projectInit' => '2017-01-01',
                'projectEnd' => '2018-12-31',
                'projectDescription' => null,
                'user_id' => 9
            ]
        );
        //45
        DB::table('projects')->insert(
            [
                'projectName' => 'Metaheurísticas robustas para enfrentar problemas de optimización multiobjetivos en bioinformática',
                'memberName' => 'Mario Inostroza-Ponta',
                'projectInit' => '2016-01-01',
                'projectEnd' => '2018-12-31',
                'projectDescription' => null,
                'user_id' => 9
            ]
        );
        //46
        DB::table('projects')->insert(
            [
                'projectName' => 'CEBIB Centre for biotechnology and bioengineering',
                'memberName' => 'Mario Inostroza-Ponta',
                'projectInit' => '2013-01-01',
                'projectEnd' => '2013-12-31',
                'projectDescription' => null,
                'user_id' => 9
            ]
        );
        //47
        DB::table('projects')->insert(
            [
                'projectName' => 'Federated Cloud Computing for Bioinformatics: Infrastructure, Algorithms and Applications.',
                'memberName' => 'Mario Inostroza-Ponta',
                'projectInit' => '2013-01-01',
                'projectEnd' => '2014-12-31',
                'projectDescription' => null,
                'user_id' => 9
            ]
        );
        //48
        DB::table('projects')->insert(
            [
                'projectName' => 'Designing and constructing a scalable pipeline of graph-based methods for the analysis of gene expression data.',
                'memberName' => 'Mario Inostroza-Ponta',
                'projectInit' => '2012-01-01',
                'projectEnd' => '2015-12-31',
                'projectDescription' => null,
                'user_id' => 9
            ]
        );
        //49
        DB::table('projects')->insert(
            [
                'projectName' => 'Uso de algoritmos de grafos, optimización combinatorial y bases de datos biológicas para el análisis de datos de expresión genética.',
                'memberName' => 'Mario Inostroza-Ponta',
                'projectInit' => '2009-01-01',
                'projectEnd' => '2010-12-31',
                'projectDescription' => null,
                'user_id' => 9
            ]
        );
        //50
        DB::table('projects')->insert(
            [
                'projectName' => 'Observatorio de Riesgos Socio Naturales',
                'memberName' => 'Mauricio Marín',
                'projectInit' => '2017-04-01',
                'projectEnd' => '2019-03-31',
                'projectDescription' => "dirección proyecto de ingeniería desarrollo de plataforma GIS de integración y visualización de datos para el observatorio",
                'user_id' => 13
            ]
        );
        //51
        DB::table('projects')->insert(
            [
                'projectName' => 'Plataforma de Apoyo a la Gestión de Emergencia y Aplicaciones',
                'memberName' => 'Mauricio Marín',
                'projectInit' => '2015-12-01',
                'projectEnd' => '2017-11-30',
                'projectDescription' => "director e investigador principal, FONDEF IDeA Etapa 1 ",
                'user_id' => 13
            ]
        );
        //51
        DB::table('projects')->insert(
            [
                'projectName' => 'Plataforma de Apoyo a la Gestión de Emergencia y Aplicaciones',
                'memberName' => 'Mauricio Marín',
                'projectInit' => '2018-10-01',
                'projectEnd' => '2020-09-30',
                'projectDescription' => "director e investigador principal, FONDEF IDeA Etapa 1 ",
                'user_id' => 13
            ]
        );
        //52
        DB::table('projects')->insert(
            [
                'projectName' => 'Mundo Senior: plataforma informática para fomentar la participación e integración socio laboral del adulto mayor',
                'memberName' => 'Mauricio Marín',
                'projectInit' => '2016-11-01',
                'projectEnd' => '2018-10-31',
                'projectDescription' => "Investigador principal, Innova Corfo Bienes Públicos Estratégicos de Alto Impacto para la Competitividad, código 16BPE-62313",
                'user_id' => 13
            ]
        );
        //53
        DB::table('projects')->insert(
            [
                'projectName' => 'Analizador de Correos Electrónicos Utilizando Técnicas de las Ciencias del Comportamiento Humano',
                'memberName' => 'Mauricio Marín',
                'projectInit' => '2013-07-01',
                'projectEnd' => '2015-06-30',
                'projectDescription' => null,
                'user_id' => 13
            ]
        );
        //54
        DB::table('projects')->insert(
            [
                'projectName' => 'Procesamiento Masivo de Eventos en Tiempo Real',
                'memberName' => 'Mauricio Marín',
                'projectInit' => '2013-04-01',
                'projectEnd' => '2015-03-31',
                'projectDescription' => null,
                'user_id' => 13
            ]
        );
        //55
        DB::table('projects')->insert(
            [
                'projectName' => 'Observatorios Escalables de la Web en Tiempo Real',
                'memberName' => 'Mauricio Marín',
                'projectInit' => '2011-01-01',
                'projectEnd' => '2014-12-31',
                'projectDescription' => null,
                'user_id' => 13
            ]
        );
        //55
        DB::table('projects')->insert(
            [
                'projectName' => 'Identificación Semántica y Composición Automática de Material Didáctico para Dominios Especializados',
                'memberName' => 'Mauricio Marín',
                'projectInit' => '2010-01-01',
                'projectEnd' => '2013-12-31',
                'projectDescription' => null,
                'user_id' => 13
            ]
        );
        //56
        DB::table('projects')->insert(
            [
                'projectName' => 'Parallelization of data structures and algorithms for multimedia database servers on the Web',
                'memberName' => 'Mauricio Marín',
                'projectInit' => '2006-01-01',
                'projectEnd' => '2007-12-31',
                'projectDescription' => null,
                'user_id' => 13
            ]
        );
        //57
        DB::table('projects')->insert(
            [
                'projectName' => 'Efficient Parallelization of Data Structures and Algorithms for Text Databases',
                'memberName' => 'Mauricio Marín',
                'projectInit' => '2004-01-01',
                'projectEnd' => '2005-12-31',
                'projectDescription' => null,
                'user_id' => 13
            ]
        );
        //58
        DB::table('projects')->insert(
            [
                'projectName' => 'Querying Moving Objects in Distributed Environments',
                'memberName' => 'Mauricio Marín',
                'projectInit' => '2005-01-01',
                'projectEnd' => '2007-12-31',
                'projectDescription' => null,
                'user_id' => 13
            ]
        );
        //59
        DB::table('projects')->insert(
            [
                'projectName' => 'Transaction Synchronization using Bulk-Synchronous Parallelism: A look at the Database and Information Retrieval Domains',
                'memberName' => 'Mauricio Marín',
                'projectInit' => '2003-01-01',
                'projectEnd' => '2003-12-31',
                'projectDescription' => null,
                'user_id' => 13
            ]
        );
        //60
        DB::table('projects')->insert(
            [
                'projectName' => 'Centro de Investigaciones de la Web',
                'memberName' => 'Mauricio Marín',
                'projectInit' => '2002-01-01',
                'projectEnd' => '2007-12-31',
                'projectDescription' => null,
                'user_id' => 13
            ]
        );
        //61
        DB::table('projects')->insert(
            [
                'projectName' => 'Automated Synchronization and Load Balancing in Parallel Discrete Event Simulation: An architecture Independent and Cost Predictable Approach to the Development of User-Friendly Software',
                'memberName' => 'Mauricio Marín',
                'projectInit' => '2001-01-01',
                'projectEnd' => '2002-12-31',
                'projectDescription' => null,
                'user_id' => 13
            ]
        );
        //62
        DB::table('projects')->insert(
            [
                'projectName' => 'Algoritmos y estructuras de datos paralelas, y aplicaciones',
                'memberName' => 'Mauricio Marín',
                'projectInit' => '1999-01-01',
                'projectEnd' => '2001-12-31',
                'projectDescription' => null,
                'user_id' => 13
            ]
        );
        //63
        DB::table('projects')->insert(
            [
                'projectName' => 'Algoritmos y estructuras de datos y aplicaciones',
                'memberName' => 'Mauricio Marín',
                'projectInit' => '1995-01-01',
                'projectEnd' => '1997-12-31',
                'projectDescription' => null,
                'user_id' => 13
            ]
        );
        //64
        DB::table('projects')->insert(
            [
                'projectName' => 'Concurrent and object-oriented system for Monte Carlo simulation of bioluminescence.',
                'memberName' => 'Fernando Rannou Fuentes',
                'projectInit' => '2015-01-01',
                'projectEnd' => '2017-12-31',
                'projectDescription' => null,
                'user_id' => 16
            ]
        );
        //65
        DB::table('projects')->insert(
            [
                'projectName' => 'Factoring system matrix with patient-dependent information and detector-invariant geometry.',
                'memberName' => 'Fernando Rannou Fuentes',
                'projectInit' => '2014-01-01',
                'projectEnd' => '2014-12-31',
                'projectDescription' => null,
                'user_id' => 16
            ]
        );
        //66
        DB::table('projects')->insert(
            [
                'projectName' => 'Design and Development of a fully parallel computational model for GATE simulations.',
                'memberName' => 'Fernando Rannou Fuentes',
                'projectInit' => '2010-01-01',
                'projectEnd' => '2012-12-31',
                'projectDescription' => null,
                'user_id' => 16
            ]
        );
        //67
        DB::table('projects')->insert(
            [
                'projectName' => 'Three-Dimensional Tomographic Reconstruction for a Small Animal Positron Emission Tomography Scanner.',
                'memberName' => 'Fernando Rannou Fuentes',
                'projectInit' => '2008-01-01',
                'projectEnd' => '2009-12-31',
                'projectDescription' => null,
                'user_id' => 16
            ]
        );
        //68
        DB::table('projects')->insert(
            [
                'projectName' => 'Estimación del Modelo Sistémico vía Simulaciones Monte Carlo y Reconstrucción Estadística de Imágenes 3D para un Scanner PET Pequeño.',
                'memberName' => 'Fernando Rannou Fuentes',
                'projectInit' => '2005-01-01',
                'projectEnd' => '2007-12-31',
                'projectDescription' => null,
                'user_id' => 16
            ]
        );
        //69
        DB::table('projects')->insert(
            [
                'projectName' => 'Aspectos Computacionales de Algoritmos Iterativos para la Reconstrucción de Imágenes Tridimensionales a partir de Dato de Proyección.',
                'memberName' => 'Fernando Rannou Fuentes',
                'projectInit' => '2000-01-01',
                'projectEnd' => '2001-12-31',
                'projectDescription' =>null,
                'user_id' => 16
            ]
        );
        //70
        DB::table('projects')->insert(
            [
                'projectName' => 'Efficient algorithms for compressed sensing image synthesis',
                'memberName' => 'Pablo Román Asenjo',
                'projectInit' => '2017-01-01',
                'projectEnd' => '2017-12-31',
                'projectDescription' => null,
                'user_id' => 17
            ]
        );
        //71
        DB::table('projects')->insert(
            [
                'projectName' => 'Proyecto de Inserción en la Académia (PAI)',
                'memberName' => 'Pablo Román Asenjo',
                'projectInit' => '2017-01-01',
                'projectEnd' => '2017-12-31',
                'projectDescription' => null,
                'user_id' => 17
            ]
        );
        //72
        DB::table('projects')->insert(
            [
                'projectName' => 'Fondecyt postdoctoral 3140634',
                'memberName' => 'Pablo Román Asenjo',
                'projectInit' => '2014-01-01',
                'projectEnd' => '2014-12-31',
                'projectDescription' => null,
                'user_id' => 17
            ]
        );
        //73
        DB::table('projects')->insert(
            [
                'projectName' => 'Fondecyt postdoctoral 3140634',
                'memberName' => 'Pablo Román Asenjo',
                'projectInit' => null,
                'projectEnd' => null,
                'projectDescription' => null,
                'user_id' => 17
            ]
        );
        //74
        DB::table('projects')->insert(
            [
                'projectName' => 'Proyecto FONDEF Nº D09I1171',
                'memberName' => 'Alcides Quispe Sanca',
                'projectInit' => '2011-01-01',
                'projectEnd' => '2013-12-31',
                'projectDescription' => 'ADAPTE (Adaptable Domain and Process Technology Engineering)',
                'user_id' => 15
            ]
        );

    }
}
