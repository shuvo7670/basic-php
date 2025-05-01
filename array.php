<?php 

// Indexed Array
$index_array = array("John Doe", 44, "Bangladesh");
// echo $index_array[0];

// Associative array
$asso_array = array( 'name' => "Abdul Rahim", 'age' => 48, 'kaj' => "Dhan Chas Kore" );
// foreach ($asso_array as $key => $value) {
//     echo strtoupper($key) . '-' . strtoupper($value) . '<br>';
// }
// Multidymentional array

$multi_array = [
    [
        'name' => 'Rakib',
        'age'   => 21,
        'grade' => 3.60,
    ],
    [
        'name' => 'Sabuj',
        'age'   => 23,
        'grade' => 4.00,
    ]
];

// $notun_nam = "Rakibul 2.0";
// $multi_array[0]['name'] = $notun_nam;
// $multi_array[0]['age'] = 45;
// $multi_array[1]['grade'] = 3.54;
$ratna_array = [
    'name'  => 'Ratna',
    'age'   => 23,
    'grade' => 4.00,
];

// unset($multi_array[2]);
// echo count($multi_array);
// var_dump(array_values($ratna_array));
// var_dump(array_keys($ratna_array));
?>
<table>
    <thead>
        <th>Name </th>
        <th>Age </th>
        <th>Grade </th>
    </thead>
    <tbody>
        <?php if( is_array( $multi_array ) ) : ?>
            <?php foreach( $multi_array as $element ) : ?>
                <tr>
                    <td><?php echo $element['name'] ?></td>
                    <td><?php echo $element['age'] ?></td>
                    <td><?php echo $element['grade'] ?></td>
                </tr>
            <?php endforeach ?>
        <?php endif ?>
    </tbody>
</table>
<br>
<br>
<br>
<br>
<br>

<?php


$new_arr = array("John Doe", 44, "Nepal");

$return_array_val = in_array( 'Nepal', $new_arr );
// var_dump($return_array_val);
// var_dump( is_array("Test") );

$new_asso_array = array( 'name' => "Abdul Rahim", 'age' => 48, 'kaj' => "Dhan Chas Kore" );
if( array_key_exists('name', $new_asso_array) ) {
    echo $new_asso_array['name'];
}

