<?php

namespace App\Models;

class Products{
    public static function all(){ 
        return ([


         //ABOUT   
        'name'      => 'Rhom Lauren R.',
        'address'   => '3542 MANGGO STREET · GRANDMEADOWS BATANGAN VALENCIA CITY BUKIDNON.',
        'email'     =>  'laurellibante3@gmail.com',
        'contact'   => '09353922587',
        'about'     => 'I am experienced in manages security solutions. They may help organize information and efforts and create plans for implementing new security measures. The administrator can also develop training documents to help educate team members about new cybersecurity policies and procedures. Administrators for security may focus on helping others adhere to security policies and managing situations in which they dont.',

        //EXPERIENCE
        'experience' => 'Experience',

         /*
            PHP Developer
            Frontend & Backend
        */
        'title_job'  => 'PHP Developer',
        'spec_job'   => 'Frontend & Backend',
        'php_description' => 'PHP developers develop programs, applications, and web sites using the dynamic scripting language PHP. PHP is known for web development and business applications. Depending on job function, PHP developers may be classified as software developers or web developers. Because the language is so ubiquitous in web site development and business, PHP can be a good choice for self-employed or contract developers.',
        'year_date'  => 'March 2015 - Novermber 2016',

        /*
            System Administrator
            Network Security
        */
        'title_job2'  => 'System Administrator',
        'spec_job2'   => 'Network Security',
        'description2' => '(IT) professionals who make sure an organization’s computer systems are functioning and meet the needs of the organization. Sysadmins support, troubleshoot, and maintain computer servers and networks.',
        'year_date2'  => 'December 2017 - March 2018',

         /*
            System Administrator
            Network Security
        */
        'title_job3'  => 'Security Consultant',
        'spec_job3'   => 'Improve their security measures',
        'description3' => 'Security consultants are highly knowledgeable security professionals who help organizations identify ways in which they can improve their security measures. The security consultant can examine the current security system and help leaders understand where they dont function well and how to improve them. Consultants may suggest specific security systems or products depending on the organizations needs.',
        'year_date3'  => 'July 2019 - August 2021',


         /*
            Security Administrator
            Manages Solutions
        */
        'title_job4'  => 'Security Administrator',
        'spec_job4'   => 'Manages Solutions',
        'description4' => 'Security consultants are highly knowledgeable security professionals who help organizations identify ways in which they can improve their security measures. The security consultant can examine the current security system and help leaders understand where they dont function well and how to improve them. Consultants may suggest specific security systems or products depending on the organizations needs.',
        'year_date4'  => 'September 2022 - present',


        //EDUCATION
        'education' => 'Education',

        /*
            1st - 4th year college
        */
        'college'  => 'Bukidnon State University',
        'profession' => 'Bachelor of Science Information Technology',
        'major'    => 'Information Technology - Computer Progamming', 
        'gpa1'   => 'GPA: 1.50',
        'date1'   => 'August 2018 - December 2023',
  
        /*
            7th 12th grade
        */
        'Hschool_Jnior_Snior_High'  => 'Valencia National High School',
        'strand' => 'I.C.T - Computer Programming',
        'gpa2'   => 'High score: 90',
        'date2' => 'August 2013 - March 2017',

         //Skills
         //Programming Language & Tools

         'skills' => 'skills',
         'programming' => 'Programming Languages & Tools',

         'workflow' => 'Workflow',
         
         'mobile'   =>'Mobile-First, Responsive Design',
         'testing_debugging' => 'Cross Browser Testing & Debugging',
         'functional_teams' => 'Cross Functional Teams',
         'development' => 'Agile Development & Scrum',

         //INTERESTS

         'interests' => 'INTERESTS',
         'des_inter1' => 'Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.',
         'des_inter2' => 'When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.',

         //AWARDS & CERTIFICATIONS

         'title_Awards' => 'Awards & Certifications',

         'award1' => 'Google Analytics Certified Developer',
         'award2' => 'Mobile Web Specialist - Google Certification',
         'award3' => 'Place - University of Colorado Boulder - Emerging Tech Competition 2009',
         'award4' => 'Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)',
         'award5' => 'Place - University of Colorado Boulder - Emerging Tech Competition 2008',
         'award6' => 'Place - James Buchanan High School - Hackathon 2006',
         'award7' => 'Place - James Buchanan High School - Hackathon 2005'




      ]);
        
    }
}