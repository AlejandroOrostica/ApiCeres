<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Profesores
        //1
        DB::table('users')->insert(
            [
                'name' => 'Roberto',
                'lastName' => 'González-Ibáñez',
                'email' => 'roberto.gonzalez.i@usach.cl',
                
                'userType' => 2,
                'userDescription' => 'Roberto González-Ibáñez obtuvo su Magíster en Ingeniería Informática el año 2006 y su PhD en la Universidad Rutgers, dónde fue becario Fulbright-CONICYT. Se incorporó como académico al Departamento de Ingeniería Informática de la Universidad de Santiago de Chile el año 2013. Las áreas de investigación de su interés son búsqueda de información, búsqueda de información colaborativa, trabajo cooperativo de computadores, interacción humano-computador, computación afectiva, análisis de los sentimientos, ingeniería de software y sistemas distribuidos.',
                'userPhoto' => 'roberto.gonzalez.i@usach.cl.png',
                'userCharge' => 'Subdirector de Investigación',
                'access_token' => ''
            ]
        );
        //2
        DB::table('users')->insert(
            [
                'name' => 'Víctor',
                'lastName' => 'Parada Daza',
                'email' => 'victor.parada@usach.cl',
                
                'userType' => 1,
                'userDescription' => '',
                'userPhoto' => 'victor.parada@usach.cl.png',
                'userCharge' => 'Subdirector de Vinculación con el Medio',
                'access_token' => '',
            ]
        );
        //3
        DB::table('users')->insert(
            [
                'name' => 'Héctor',
                'lastName' => 'Antillanca Espina',
                'email' => 'hector.antillanca@usach.cl',
                
                'userType' => 1,
                'userDescription' => 'Héctor Antillanca Espina llegó al área de la Informática desde los Sistemas Digitales de la Ingeniería Electrónica, en la UC de Valparaíso. En 1985 obtuvo el grado de Magíster en Ingeniería Electrónica, mención Computadores y Sistemas Digitales, en la UTFSM, con un aporte basado en la teoría de Compiladores. Es académico de la Universidad de Santiago desde 1986. En 1999 obtuvo el grado de Doctor en Ciencias de la Ingeniería, en la PUC de Chile. Tiene experiencia en desarrollo de sistemas de software de apoyo al trabajo en equipo. Actualmente sus intereses están en la Ingeniería de Software Colaborativa.',
                'userPhoto' => 'hector.antillanca@usach.cl.png',
                'userCharge' => 'Jefe de Carrera Ingeniería de Ejecución',
                'access_token' => '',
            ]
        );
        //4
        DB::table('users')->insert(
            [
                'name' => 'Leonel',
                'lastName' => 'Medina Daza',
                'email' => 'leonel.medina@usach.cl',
                
                'userType' => 1,
                'userDescription' => 'Leo Medina se incorporó al DIINF como profesor asistente en 2018. Anteriormente, fue investigador postdoctoral en la U. de Valparaíso, investigador asociado y estudiante de doctorado en Duke University, EEUU, e ingeniero de I+D en la U. de Chile. Su área de investigación está dentro de la ingeniería biomédica, y en específico le interesa el desarrollo de herramientas computacionales y la aplicación de técnicas ingenieriles para el entendimiento del sistema nervioso y el tratamiento de desórdenes neuronales, esto es, la neuroingeniería y la neurociencia computacional. Sus modelos computacionales han contribuido a comprender cómo las neuronas responden a la estimulación eléctrica, técnica que está siendo utilizada para tratar numerosas enfermedades. Además tiene experiencia y le interesa el procesamiento de imágenes y el aprendizaje de máquinas. Es apasionado del fútbol, y su medio de transporte favorito es la bicicleta. ',
                'userPhoto' => 'leonel.medina@usach.cl.png',
                'userCharge' => '',
                'access_token' => '',
            ]
        );
        //5
        DB::table('users')->insert(
            [
                'name' => 'Gonzalo',
                'lastName' => 'Acuña Leiva',
                'email' => 'gonzalo.acuna@usach.cl',
                
                'userType' => 1,
                'userDescription' => 'Gonzalo Acuña nació en Santiago de Chile. Obtuvo su B.Cs. en Ingeniería Eléctrica (1980) y su título de Ingeniero Eléctrico (1986) en la Universidad de Chile. Obtuvo su Ph.D. en Control Automático en el Institut National Polytechnique de Grenoble, Francia, en 1995. Actualmente es profesor titular del Departamento de Ingeniería Informática de la Universidad de Santiago de Chile. Sus temas de investigación incluyen el diseño de software de sensores, modelamiento neuronal y con SVM, predicción de sistemas no lineales, la conciliación de datos y análisis de datos con aplicaciones biotecnológicas y mineras.',
                'userPhoto' => 'gonzalo.acuna@usach.cl.png',
                'userCharge' => '',
                'access_token' => '',
            ]
        );
        //6
        DB::table('users')->insert(
            [
                'name' => 'Carolina',
                'lastName' => 'Bonacic Castro',
                'email' => 'carolina.bonacic@usach.cl',   
                'userType' => 1,
                'userDescription' => 'Investigadora Asociada en Departamento de Ingeniería Informática de la Universidad de Santiago de Chile. Áreas de investigación: Recuperación de Información y Computación Escalable para la Web, Micro Simulación Social.',
                'userPhoto' => 'carolina.bonacic@usach.cl.png',
                'userCharge' => 'Directora Magíster Ingeniería Informática',
                'access_token' => '',
            ]
        );
        //7
        DB::table('users')->insert(
            [
                'name' => 'Max',
                'lastName' => 'Chacón Pacheco',
                'email' => 'max.chacon@usach.cl',
                
                'userType' => 1,
                'userDescription' => 'Max Chacón es formado en el Departamento de Ingeniería Eléctrica de nuestra casa de estudios, recibe el título de Ingeniero Civil Electricista el año 1984. Trabaja como ingeniero de telecomunicaciones y como académico del Departamento de Ingeniería Eléctrica de la Universidad de la Frontera en Temuco. En 1989 obtiene el grado de Magíster en Ciencias de la Ingeniería Biomédica, en la Universidad Federal de Rio de Janeiro y en 1996 el grado de Doctor en Ciencias en la misma especialidad y Universidad. Es miembro del Departamento de Ingeniería Informática de la Universidad de Santiago de Chile desde el año 1996. Las principales líneas de investigación se relacionan con minería de datos, informática médica y modelos de sistemas fisiológicos. Actualmente es Profesor Titular y lidera el grupo de investigación multidisciplinario de modelamiento fisiológico del Departamento de Ingeniería Informática.',
                'userPhoto' => 'max.chacon@usach.cl.png',
                'userCharge' => '',
                'access_token' => '',
            ]
        );
        //8
        DB::table('users')->insert(
            [
                'name' => 'Fernando',
                'lastName' => 'Contreras Botto',
                'email' => 'fernando.contreras@usach.cl',
                
                'userType' => 1,
                'userDescription' => '',
                'userPhoto' => 'fernando.contreras@usach.cl.png',
                'userCharge' => '',
                'access_token' => '',
            ]
        );
        //9
        DB::table('users')->insert(
            [
                'name' => 'Mario',
                'lastName' => 'Inostroza-Ponta',
                'email' => 'mario.inostroza@usach.cl',
                
                'userType' => 1,
                'userDescription' => 'Mario Inostroza Ponta obtiene su maestría el año 2000 en la Universidad de Santiago de Chile y su PhD el año 2008 en la Universidad de Newcastle en Australia. Es miembro del Departamento de Ingeniería Informática de la Universidad de Santiago de Chile desde el año 2002. Además, tiene experiencia de trabajo en la industria en desarrollo e integración de plataformas de aprovisionamiento. Su principal experiencia es en ingeniería en computación o ciencias de la computación, específicamente en las áreas de heurísticas y metaheurísticas, aplicadas a problemas de optimización combinatoria en programación y bioinformática, entre otros.',
                'userPhoto' => 'mario.inostroza@usach.cl.png',
                'userCharge' => '',
                'access_token' => '',
            ]
        );
        //10
        DB::table('users')->insert(
            [
                'name' => 'José Luis',
                'lastName' => 'Jara',
                'email' => 'jljara@usach.cl',
                
                'userType' => 1,
                'userDescription' => 'J.L. Jara obtiene su maestría el año 1997 en la Universidad de Santiago de Chile y su PhD el año 2006 en The University of York, Inglaterra. Es miembro del Departamento de Ingeniería Informática de la Universidad de Santiago de Chile desde el año 1998. Se ha dedicado principalmente a la ingeniería informática y ciencia de la computación aplicada a la biología y medicina. Además ha tenido experiencia en la industria desarrollando aplicaciones de ventas.',
                'userPhoto' => 'jljara@usach.cl.png',
                'userCharge' => 'Jefe de Carrera Ingeniería Civil',
                'access_token' => '',
            ]
        );
        //11
        DB::table('users')->insert(
            [
                'name' => 'Fernanda',
                'lastName' => 'Kri Amar',
                'email' => 'fernanda.kri@usach.cl',
                
                'userType' => 1,
                'userDescription' => '',
                'userPhoto' => 'fernanda.kri@usach.cl.png',
                'userCharge' => '',
                'access_token' => '',
            ]
        );
        //12
        DB::table('users')->insert(
            [
                'name' => 'Edmundo',
                'lastName' => 'Leiva-Lobos',
                'email' => 'edmundo.leiva@usach.cl',
                
                'userType' => 1,
                'userDescription' => 'Edmundo P. Leiva Lobos obtiene su maestría el año 1991 en la Universidad Católica de Chile y su PhD el año 2000 en la Universidad de Milán en Italia. Es miembro del Departamento de Ingeniería Informática de la Universidad de Santiago de Chile desde el año 1992. Además, el 2010 realizó un año sabático en la Universidad de Sidney, Australia, en el área de Computación Afectiva. Se ha especializado en factores humanos en ingeniería, en particular en las áreas de: interacción humano computador, aplicaciones colaborativas, computación afectiva, rediseño de procesos de negocios, sistemas de recomendación y en responsabilidad social.',
                'userPhoto' => 'edmundo.leiva@usach.cl.png',
                'userCharge' => '',
                'access_token' => '',
            ]
        );
        //13
        DB::table('users')->insert(
            [
                'name' => 'Mauricio',
                'lastName' => 'Marín',
                'email' => 'mauricio.marin@usach.cl',
                
                'userType' => 1,
                'userDescription' => 'Dr. Mauricio Marín es profesor titular del Departamento de Ingeniería Informática de la Universidad de Santiago de Chile. Anteriormente fue académico de la Universidad de Magallanes, Chile, periodo en que fue investigador principal del Centro de Investigación de la Web financiado por el programa de Núcleos de la Iniciativa Científica Milenio. Luego fue director e investigador de Yahoo! Labs Latinoamérica, laboratorio de I+D ubicado en la Universidad de Chile y financiado por Yahoo! Inc. Actualmente es director del Centro de Innovación en Tecnologías de la Información para Aplicaciones Sociales (CITIAPS) de la Universidad de Santiago, y es investigador titular en el Centro de Biotecnología y Bioingeniería (CeBiB) financiado por el programa de Centros Basales de CONICYT. Su trabajo de investigación y desarrollo está enfocado en las aplicaciones de computación paralela y distribuida, cubriendo dominios de aplicación que requieran del uso de técnicas de bases de datos, big-data, aplicaciones sociales, sistemas basado en la Web y procesamiento de grandes volúmenes de datos.',
                'userPhoto' => 'mauricio.marin@usach.cl.png',
                'userCharge' => 'Director Doctorado',
                'access_token' => '',
            ]
        );
        //14
        DB::table('users')->insert(
            [
                'name' => 'Rosa',
                'lastName' => 'Muñoz Calanchie',
                'email' => 'rosa.munoz@usach.cl',
                
                'userType' => 1,
                'userDescription' => '',
                'userPhoto' => 'rosa.munoz@usach.cl.png',
                'userCharge' => '',
                'access_token' => '',
            ]
        );
        //15
        DB::table('users')->insert(
            [
                'name' => 'Alcides',
                'lastName' => 'Quispe Sanca',
                'email' => 'alcides.quispe@usach.cl',
                
                'userType' => 1,
                'userDescription' => 'Alcides Quispe Sanca obtuvo el grado de Doctor en Ciencias Mención Computación en la Universidad de Chile. A partir de marzo del 2015 se desempeña como Profesor Asistente del Departamento de Ingeniería Informática de la Universidad de Santiago de Chile. Sus intereses de investigación están dentro del área de la Ingeniería de Software, específicamente en la Ingeniería de Requisitos, Procesos de Software, e Investigación Empírica en Ingeniería de Software.',
                'userPhoto' => 'alcides.quispe@usach.cl.png',
                'userCharge' => 'Director Magíster Seguridad, Peritaje y Auditoría en Procesos Informáticos',
                'access_token' => '',
            ]
        );
        //16
        DB::table('users')->insert(
            [
                'name' => 'Fernando',
                'lastName' => 'Rannou Fuentes',
                'email' => 'fernando.rannou@usach.cl',
                
                'userType' => 1,
                'userDescription' => '',
                'userPhoto' => 'fernando.rannou@usach.cl.png',
                'userCharge' => 'Director Departamento',
                'access_token' => '',
            ]
        );
        //17
        DB::table('users')->insert(
            [
                'name' => 'Pablo',
                'lastName' => 'Román Asenjo',
                'email' => 'pablo.roman.a@usach.cl',
                'userType' => 1,
                'userDescription' => '',
                'userPhoto' => 'pablo.roman.a@usach.cl.png',
                'userCharge' => '',
                'access_token' => '',
            ]
        );
        //18
        DB::table('users')->insert(
            [
                'name' => 'Mónica',
                'lastName' => 'Villanueva Ilufi',
                'email' => 'monica.villanueva@usach.cl',
                'userType' => 1,
                'userDescription' => 'Mónica Villanueva Ilufi, es Ingeniero Civil Matemático, M. Sc y D. Sc en Ingeniería de Sistemas y Computación, de la Universidad Federal de Río de Janeiro, Brasil. Es académica del Departamento de Ingeniería Informática de la Universidad de Santiago de Chile desde el año 1996. Sus áreas de interés son algoritmos y grafos, además de la docencia y formación profesional en informática, ingeniería, y educación en general.',
                'userPhoto' => 'monica.villanueva@usach.cl.png',
                'userCharge' => 'Subdirectora Docente',
                'access_token' => '',
            ]
        );
        
        //Nosotros
        DB::table('users')->insert(
            [
                'name' => 'Héctor',
                'lastName' => 'Pérez',
                'email' => 'hector.perez.m@usach.cl',
                
                'userType' => 3,
                'userDescription' => '',
                'userPhoto' => 'user.png',
                'userCharge' => '',
                'access_token' => '',
            ]
        );

        DB::table('users')->insert(
            [
                'name' => 'Ruth',
                'lastName' => 'Marín',
                'email' => 'ruth.marin@usach.cl',
                
                'userType' => 3,
                'userDescription' => '',
                'userPhoto' => 'user.png',
                'userCharge' => '',
                'access_token' => '',
            ]
        );

        DB::table('users')->insert(
            [
                'name' => 'Victor',
                'lastName' => 'Maripangui',
                'email' => 'victor.maripangui@usach.cl',
                
                'userType' => 3,
                'userDescription' => '',
                'userPhoto' => 'user.png',
                'userCharge' => '',
                'access_token' => '',
            ]
        );

        DB::table('users')->insert(
            [
                'name' => 'Barbara',
                'lastName' => 'Peña',
                'email' => 'barbara.pena.a@usach.cl',
                
                'userType' => 3,
                'userDescription' => '',
                'userPhoto' => 'user.png',
                'userCharge' => '',
                'access_token' => '',
            ]
        );

        DB::table('users')->insert(
            [
                'name' => 'Diego',
                'lastName' => 'Salinas',
                'email' => 'diego.salinas.m@usach.cl',
                
                'userType' => 3,
                'userDescription' => '',
                'userPhoto' => 'user.png',
                'userCharge' => '',
                'access_token' => '',
            ]
        );

        DB::table('users')->insert(
            [
                'name' => 'Mauricio',
                'lastName' => 'Carvajal',
                'email' => 'mauricio.carvajal@usach.cl',
                
                'userType' => 3,
                'userDescription' => '',
                'userPhoto' => 'user.png',
                'userCharge' => '',
                'access_token' => '',
            ]
        );
       DB::table('users')->insert(
            [
                'name' => 'Alejandro',
                'lastName' => 'Oróstica',
                'email' => 'alejandro.orostica@usach.cl',
                'userType' => 3,
                'userDescription' => '',
                'userPhoto' => 'user.png',
                'userCharge' => '',
                'access_token' => '',
            ]
        );
       DB::table('users')->insert(
            [
                'name' => 'Ignacio',
                'lastName' => 'Farias',
                'email' => 'ignacio.farias.v@usach.cl',
                'userType' => 3,
                'userDescription' => '',
                'userPhoto' => 'user.png',
                'userCharge' => '',
                'access_token' => '',
            ]
        );
    }
}