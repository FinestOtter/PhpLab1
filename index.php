<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php');

        //An array of students in the "class"
        $students = array();
        
        //The first student: John Doe
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        //The second student: Albert Einstein
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        //The third student: Nathan Barber (that's me)
        $third = new Student();
        $third->surname = "Barber";
        $third->first_name = "Nathan";
        $third->add_email('home','nbarber789@gmail.com');
        $third->add_grade(99);
        $third->add_grade(98);
        $third->add_grade(97);
        $students['a00965240'] = $third;

        //Sort the students by student number and prints them out
        ksort($students);
        
        foreach($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
