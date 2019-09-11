<?php

class ArrayObj extends ArrayObject
{

	public function showTable()
	{
		function table( $data ) {
			$html = '';
			foreach( $data as $key => $value ) {
				if ( is_array( $value ) ) {
					$html .= sprintf( '<tr><td>%s</td><td>%s</td></tr>', $key, table( $value ) );
				} else {
					$html .= sprintf( '<tr><td>%s</td><td>%s</td></tr>', $key, $value );
				}
			}
			$html = sprintf( '<table style="width:100%%;border-collapse:collapse;" border="1"><tr><th>Key</th><th>Value</th></tr>%s</table>', $html );
			return $html;
		};
		echo table( $this->getIterator() );
	}

}

$arrayObj = new ArrayObj();
$arrayObj->append( [ 'key01' => 'value01' ] );
$arrayObj->offsetSet( 'key02', 'value02' );
$arrayObj->offsetSet( 'key03', [ 'key04' => 'value04' ] );
$arrayObj->offsetSet( 'key05', [ 'key06' => [ 'key07' => 'value07' ], 'value08' ] );
$arrayObj->showTable();
