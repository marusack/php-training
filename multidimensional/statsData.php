<script type="text/javascript">
    var data = <?php
                /*
                $data = array();

                //Bar
                $data['bar'] = array(
                    'categories' => array('Manzana', 'Bananas', 'Naranjas'),
                    'series' => array(
                        array('name' => 'Lorra', 'data' => array(10, 50, 21)),
                        array('name' => 'Cosito', 'data' => array(20, 32, 15))
                    )
                );
                 * 
                 */
                include 'multidimensional.php';
                echo json_encode($result);
                ?>
    var keys = <?php
                include 'multidimensional.php';
                echo json_encode($keys);
                ?>
</script>
