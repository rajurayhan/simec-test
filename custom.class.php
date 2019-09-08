<?php
	/**
	 * summary
	 */
	class Custom extends ArrayObject{

        public function __construct($array = array()){
            parent::__construct($array, ArrayObject::ARRAY_AS_PROPS);

            $this->offsetSet('name', 'Raju');
            $this->offsetSet('mobile', '01913776667');
            $this->offsetSet('email', 'send2raju.bd@gmail.com');
        }

        public function showTable(){
            $data = $this->getArrayCopy();
            // $data   =  [
            //     'key1' => 'val1',
            //     'key2' => 'val2',
            //     'key3' => [
            //         'key4' => 'val4',
            //         'key5' => [
            //             'key7' => 'val7',
            //             'key8' => 'val8',
            //         ],
            //         'key6' => 'val6',
            //     ],
            //     'key9' => []
            // ];
            echo '<table border="1"><tbody>';
            foreach ($data as $key => $value) {
                echo '<tr>
                        <td>'.$key.'</td>
                        <td>'.$value.'</td>
                    </tr>';
            }
            echo '</tbody></table>';
        }
	    
	}
?>