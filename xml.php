<?php
    
    $conn  = mysqli_connect('localhost','root','','forumdb');
    $query = "SELECT * from post";
    $querypost = mysqli_query($conn,$query);

    $query2 = "SELECT * from comment";
    $querycomment = mysqli_query($conn,$query2);

    $xml = new XMLWriter();
    $xml->openURI("php://output");
    $xml->startDocument();
    $xml->setIndent(true);
    

    $xml->startElement('posts_comments');

        while($row=mysqli_fetch_assoc($querypost))
        {
            $xml->startElement('Post');
                $xml->startElement('postid');
                $xml->writeRaw($row['post_id']);
                $xml->endElement();

                $xml->startElement('post_title');
                $xml->writeRaw($row['post_title']);
                $xml->endElement();

                $xml->startElement('post_content');
                $xml->writeRaw($row['post_content']);
                $xml->endElement();

                $xml->startElement('post_creator');
                $xml->writeRaw($row['post_creator']);
                $xml->endElement();

                $xml->startElement('post_date');
                $xml->writeRaw($row['post_date']);
                $xml->endElement();
            $xml->endElement();
        }
        while($row=mysqli_fetch_assoc($querycomment))
        {
            $xml->startElement('Comment');
                $xml->startElement('commentid');
                $xml->writeRaw($row['comment_id']);
                $xml->endElement();

                $xml->startElement('comment_content');
                $xml->writeRaw($row['comment_content']);
                $xml->endElement();

                $xml->startElement('comment_creator');
                $xml->writeRaw($row['comment_creator']);
                $xml->endElement();

                $xml->startElement('comment_date');
                $xml->writeRaw($row['comment_date']);
                $xml->endElement();
            $xml->endElement();
        }
        

    $xml->endElement();
    header('Content-type: text/xml');
    $xml->flush();
?>