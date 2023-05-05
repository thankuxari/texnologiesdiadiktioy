<?php

    $conn = new PDO("mysql:host=localhost;dbname=forumdb","root","");   
    $querypost = $conn->prepare('SELECT * FROM post');
    $querypost->execute();

    $xml = new XMLWriter();
    $xml->openURI("php://output");
    $xml->startDocument();
    $xml->setIndent(true);
    $xml->startElement('post');

        while($row = $querypost->fetchAll())
        {
            $xml->startElement('post');
                $xml->startElement('post_id');
                $xml->writeRaw($row['post_id']);
                $xml->endElement();

                $xml->startElement('post_title');
                $xml->writeRaw($row['post_title']);
                $xml->endElement();

                $xml->startElement('post_content');
                $xml->writeRaw($row['post_content']);
                $xml->endElement();

                $xml->startElement('post_creator');
                $xml->writeRaw($row['post_date']);
                $xml->endElement();
            $xml->endElement();
        }
    
    $xml->endElement();


    header('Content-type: text/xml');
    $xml->flush();
?>