<?php get_header(); 



  
    
    $query = new WP_Query(array(
      'post_type' => 'post',
      'posts_per_page' => 3, 
    )); 





?>




<div class="container" style="margin-top: 2rem;">

<?php 
    $example_array = array(
        'Tokyo', 'Osaka', 'Kyoto', 'Yokohama', 'Sapporo', 'Nagoya', 'Fukuoka', 'Hiroshima', 'Kobe'
    );

 
  
    
    // $example_object =  array(
    //         'name'       => 'Tokyo',
    //         'population' => 13960000,
    //         'region'     => 'Kanto',
    //         'is_coastal' => get_japanese_coastal_city( 'Tokyo' ),
    //     ),


    $example_object_array = array(
        array(
            'name'       => 'Tokyo',
            'population' => 13960000,
            'region'     => 'Kanto',
            'is_coastal' => true,
        ),
        array(
            'name'       => 'Osaka',
            'population' => 2750000,
            'region'     => 'Kansai',
            'is_coastal' => true,
        ),
        array(
            'name'       => 'Kyoto',
            'population' => 1460000,
            'region'     => 'Kansai',
            'is_coastal' => false,
        ),
        array(
            'name'       => 'Sapporo',
            'population' => 1952000,
            'region'     => 'Hokkaido',
            'is_coastal' => true,
        ),
        array(
            'name'       => 'Fukuoka',
            'population' => 1615000,
            'region'     => 'Kyushu',
            'is_coastal' => true,
        ),
        array(
            'name'       => 'Nagoya',
            'population' => 2300000,
            'region'     => 'Chubu',
            'is_coastal' => true,
        ),
        array(
            'name'       => 'Hiroshima',
            'population' => 1194000,
            'region'     => 'Chugoku',
            'is_coastal' => true,
        ),
        array(
            'name'       => 'Sendai',
            'population' => 1086000,
            'region'     => 'Tohoku',
            'is_coastal' => true,
        ),
        array(
            'name'       => 'Kobe',
            'population' => 1528000,
            'region'     => 'Kansai',
            'is_coastal' => true,
        ),
        array(
            'name'       => 'Naha',
            'population' => 320000,
            'region'     => 'Okinawa',
            'is_coastal' => true,
        ),
    ); 

   

    // foreach ($example_array as $foobar) {
    //     echo "City is: $foobar<br>";
    // };

    
    // Initialize a counter
    $counter = 3;

    // While loop
    while ($counter <= 5) {
        echo "The counter is: $counter<br>";


        $counter = $counter + 1; // Increment the counter
    }

  
  ?>


</div>

<?php get_footer(); ?>