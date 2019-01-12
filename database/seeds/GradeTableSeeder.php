<?php

use Illuminate\Database\Seeder;

class GradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                //Roberto Gonzalez
        DB::table('grades')->insert(
            [
                'gradeName' => ' Ph.D.  Communication Library and Information Science',
                'gradeInstitution' => 'Rutgers University. New Jersey. USA. Fulbright Scholar.',
                'gradeyear' => 2013,
                'user_id' => 1
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Magíster en Ingeniería Informática',
                'gradeInstitution' => 'Universidad de Santiago de Chile',
                'gradeyear' => 2006,
                'user_id' => 1
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Ingeniero Civil en Informática',
                'gradeInstitution' => 'Universidad de Santiago de Chile',
                'gradeyear' => 2006,
                'user_id' => 1
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Licenciado en Ciencias de la Ingeniería',
                'gradeInstitution' => 'Universidad de Santiago de Chile',
                'gradeyear' => 2004,
                'user_id' => 1
            ]
        );
        //Victor Parada
        DB::table('grades')->insert(
            [
                'gradeName' => 'Doctor en Ciencias de la Ingeniería de Sistemas y Computación',
                'gradeInstitution' => 'COPPE-Universidad Federal de Río de Janeiro',
                'gradeyear' => 1989,
                'user_id' => 2
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Magíster en Ingeniería Industrial',
                'gradeInstitution' => 'Pontificia Universidad Católica Río de Janeiro',
                'gradeyear' => 1986,
                'user_id' => 2
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Ingeniero Civil Químico',
                'gradeInstitution' => 'Universidad de Concepción',
                'gradeyear' => 1981,
                'user_id' => 2
            ]
        );
        //Hector Antillanca
        DB::table('grades')->insert(
            [
                'gradeName' => 'Doctor en Ciencias de la Ingeniería',
                'gradeInstitution' => 'Pontificia Universidad Católica de Chile',
                'gradeyear' => 1999,
                'user_id' => 3
            ]
        );        
        //Leonel Medina
        DB::table('grades')->insert(
            [
                'gradeName' => ' Ph.D. Biomedical Engineering',
                'gradeInstitution' => 'Duke University',
                'gradeyear' => 2016,
                'user_id' => 4
            ]
        );        
        DB::table('grades')->insert(
            [
                'gradeName' => 'Magíster en Cs. de la Ingeniería mención Ingeniería Biomédica',
                'gradeInstitution' => 'Universidad de Chile',
                'gradeyear' => 2007,
                'user_id' => 4
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Ingeniero Civil Electricista',
                'gradeInstitution' => 'Universidad de Chile',
                'gradeyear' => 2007,
                'user_id' => 4
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Licenciado en Cs. de la Ingeniería',
                'gradeInstitution' => 'Universidad de Chile',
                'gradeyear' => 2003,
                'user_id' => 4
            ]
        );
        //Gonzalo Acuña
        DB::table('grades')->insert(
            [
                'gradeName' => 'Docteur en Automatique et Productique',
                'gradeInstitution' => 'Institut National Polytechnique de Grenoble',
                'gradeyear' => 1995,
                'user_id' => 5
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Diplôme d´Etudes Approfondies en Automatique',
                'gradeInstitution' => 'Institut National Polytechnique de Grenoble',
                'gradeyear' => 1991,
                'user_id' => 5
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Ingeniero Civil Electricista',
                'gradeInstitution' => 'Universidad de Chile',
                'gradeyear' => 1986,
                'user_id' => 5
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Bachiller en Ciencias de la Ingeniería Eléctrica',
                'gradeInstitution' => 'Universidad de Chile',
                'gradeyear' => 1980,
                'user_id' => 5
            ]
        );
        //Carolina Bonacic
        DB::table('grades')->insert(
            [
                'gradeName' => ' Ph.D.  in Computer Science',
                'gradeInstitution' => 'Universidad Complutense de Madrid',
                'gradeyear' => 2011,
                'user_id' => 6
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Magíster en Ciencias de la Computación',
                'gradeInstitution' => 'Universidad de Chile',
                'gradeyear' => 2007,
                'user_id' => 6
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Ingeniero de Ejecución en Computación e Informática',
                'gradeInstitution' => 'Universidad de Magallanes',
                'gradeyear' => 2001,
                'user_id' => 6
            ]
        );
        //Max Chacón
        DB::table('grades')->insert(
            [
                'gradeName' => 'D. SC. en Ingeniería Biomédica',
                'gradeInstitution' => 'Universidad Federal de Río de Janeiro',
                'gradeyear' => 1996,
                'user_id' => 7
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'M. SC. en Ingeniería Biomédica',
                'gradeInstitution' => 'Universidad Federal de Río de Janeiro',
                'gradeyear' => 1989,
                'user_id' => 7
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Ingeniero Civil Electricista',
                'gradeInstitution' => 'Universidad de Santiago de Chile',
                'gradeyear' => 1984,
                'user_id' => 7
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Licenciado en Ciencias de la Ingeniería',
                'gradeInstitution' => 'Universidad de Santiago de Chile',
                'gradeyear' => 1982,
                'user_id' => 7
            ]
        );
        //Fernando Contreras Botto
        DB::table('grades')->insert(
            [
                'gradeName' => 'M. Sc. Computer Science',
                'gradeInstitution' => 'The University of Tennessee',
                'gradeyear' => 1989,
                'user_id' => 8
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Ingeniero Civil Electricista',
                'gradeInstitution' => 'Universidad de Santiago de Chile',
                'gradeyear' => 1980,
                'user_id' => 8
            ]
        );
        //Mario Inostroza-Ponta
        DB::table('grades')->insert(
            [
                'gradeName' => ' Ph.D. Computer Science',
                'gradeInstitution' => 'The University of Newcastle',
                'gradeyear' => 2008,
                'user_id' => 9
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Magíster en Ingeniería Informática',
                'gradeInstitution' => 'Universidad de Santiago de Chile',
                'gradeyear' => 2000,
                'user_id' => 9
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Ingeniero Civil en Informática',
                'gradeInstitution' => 'Universidad de Santiago de Chile',
                'gradeyear' => 1999,
                'user_id' => 9
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Licenciado en Ciencias de la Ingeniería',
                'gradeInstitution' => 'Universidad de Santiago de Chile',
                'gradeyear' => 1998,
                'user_id' => 9
            ]
        );
        //J.L
        DB::table('grades')->insert(
            [
                'gradeName' => ' Ph.D.  in Computer Science',
                'gradeInstitution' => 'University of York',
                'gradeyear' => 2006,
                'user_id' => 10
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Magíster en Ingeniería Informática',
                'gradeInstitution' => 'Universidad de Santiago de Chile',
                'gradeyear' => 1997,
                'user_id' => 10
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Ingeniero Civil en Informática',
                'gradeInstitution' => 'Universidad de Santiago de Chile',
                'gradeyear' => 1997,
                'user_id' => 10
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Licenciado en Ciencias de la Ingeniería',
                'gradeInstitution' => 'Universidad de Santiago de Chile',
                'gradeyear' => 1995,
                'user_id' => 10
            ]
        );
        // Fernanda Kri
        DB::table('grades')->insert(
            [
                'gradeName' => ' Ph.D. in Computer Science',
                'gradeInstitution' => 'The University of Newcastle',
                'gradeyear' => 2000,
                'user_id' => 11
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Magíster en Ingeniería Informática',
                'gradeInstitution' => 'Universidad de Santiago de Chile',
                'gradeyear' => 1996,
                'user_id' => 11
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Ingeniero Civil en Informática',
                'gradeInstitution' => 'Universidad de Santiago de Chile',
                'gradeyear' => 1996,
                'user_id' => 11
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Licenciado en Ciencias de la Ingeniería',
                'gradeInstitution' => 'Universidad de Santiago de Chile',
                'gradeyear' => 1994,
                'user_id' => 11
            ]
        );
        // Edmundo Leiva-Lobos
        DB::table('grades')->insert(
            [
                'gradeName' => 'Doctorado en Ciencias de la Información',
                'gradeInstitution' => 'Universidad de Milán',
                'gradeyear' => 2000,
                'user_id' => 12
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Magíster en Ciencias de la Ingeniería',
                'gradeInstitution' => 'Pontificia Universidad Católica de Chile',
                'gradeyear' => 1991,
                'user_id' => 12
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Licenciado en Ciencias de la Computación',
                'gradeInstitution' => 'Pontificia Universidad Católica de Chile',
                'gradeyear' => 1986,
                'user_id' => 12
            ]
        );
        //Mauricio Marin
        DB::table('grades')->insert(
            [
                'gradeName' => ' Ph.D. in Computer Science',
                'gradeInstitution' => 'University of Oxford',
                'gradeyear' => 1998,
                'user_id' => 13
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Magister en Ciencias de la Computación',
                'gradeInstitution' => 'Universidad de Chile',
                'gradeyear' => 1992,
                'user_id' => 13
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Ingeniero de Ejecución en Electricidad',
                'gradeInstitution' => 'Universidad de Magallanes',
                'gradeyear' => 1986,
                'user_id' => 13
            ]
        );
        //Rosa Muñoz
        DB::table('grades')->insert(
            [
                'gradeName' => ' Ph.D. ' ,
                'gradeInstitution' => 'University of London',
                'gradeyear' => 2002,
                'user_id' => 14
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Master en Telematica y Redes de Comunicaciones',
                'gradeInstitution' => 'Universidad Politecnica de Madrid',
                'gradeyear' => 1994,
                'user_id' => 14
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Ingeniero Civil en Electrónica',
                'gradeInstitution' => 'Universidad Técnica Federico Santa María',
                'gradeyear' => 1989,
                'user_id' => 14
            ]
        );
        //Alcides Quispe Sanca
        DB::table('grades')->insert(
            [
                'gradeName' => ' Ph.D. in Computer Science',
                'gradeInstitution' => 'Universidad de Chile',
                'gradeyear' => 2015,
                'user_id' => 15
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Ingeniero de Sistemas',
                'gradeInstitution' => 'Universidad Católica de Santa María',
                'gradeyear' => 2005,
                'user_id' => 15
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Bachiller en Ingeniería de Sistemas',
                'gradeInstitution' => 'Universidad Católica de Santa María',
                'gradeyear' => 1997,
                'user_id' => 15
            ]
        );
        // Fernando Rannou
        DB::table('grades')->insert(
            [
                'gradeName' => ' Ph.D. in Computer Science',
                'gradeInstitution' => 'The University of Tennessee',
                'gradeyear' => 1998,
                'user_id' => 16
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'M.S. in Computer Science ',
                'gradeInstitution' => 'The University of Tennessee',
                'gradeyear' => 1993,
                'user_id' => 16
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Ingeniero Civil en Informática',
                'gradeInstitution' => 'Universidad de Santiago de Chile',
                'gradeyear' => 1988,
                'user_id' => 16
            ]
        );
        //Pablo Román 
        DB::table('grades')->insert(
            [
                'gradeName' => 'Doctor en Sistemas de Ingeniería',
                'gradeInstitution' => 'Universidad de Chile',
                'gradeyear' => 2011,
                'user_id' => 17
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Ingeniero Civil en Computación',
                'gradeInstitution' => 'Universidad de Chile',
                'gradeyear' => 1999,
                'user_id' => 17
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Licenciatura en Ciencias de la Ingeniería mención Computación',
                'gradeInstitution' => 'Universidad de Chile',
                'gradeyear' => 1999,
                'user_id' => 17
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Licenciatura en Ciencias mención Física',
                'gradeInstitution' => 'Universidad de Chile',
                'gradeyear' => 1994,
                'user_id' => 17
            ]
        );
        //Monica Villanueva
        DB::table('grades')->insert(
            [
                'gradeName' => 'D. Sc. Ingeniería de Sistemas y Computación',
                'gradeInstitution' => 'Universidad Federal de Río de Janeiro',
                'gradeyear' => 1996,
                'user_id' => 18
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'M. Sc. Ingeniería de Sistemas y Computación',
                'gradeInstitution' => 'Universidad Federal de Río de Janeiro',
                'gradeyear' => 1989,
                'user_id' => 18
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Ingeniero',
                'gradeInstitution' => 'Universidad de Chile',
                'gradeyear' => 1984,
                'user_id' => 18
            ]
        );
    }
}
