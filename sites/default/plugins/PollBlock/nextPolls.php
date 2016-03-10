
<div class="codo_topics_head">
	<div class="codo_topics_head_item"><a href="#">Eerste Opkomsten</a></div>
</div>
<div class="codo_topics_body" id="codo_topics_body">
	<div class="codo_page_1">
		<article class="clearfix">
			<div class="codo_topics_topic_message">
	            <?php 

	            use CODOF\Util;

	            $db = \DB::getPDO();
	             
	            
	            
	            $today = new DateTime();
	            $qry = 'SELECT topic_id, title, opkomst FROM codo_topics WHERE opkomst >= CURDATE()';
	            $res = $db->query($qry);
	            $topics = $res->fetchAll();
	            
	            $date = array();
	            foreach ($topics as $key => $row){
	            	$date[$key] = $row['opkomst'];
	            }
	            array_multisort($date, SORT_NATURAL, $topics);

	            foreach ( $topics as $key => $row){
	            	echo '<a id="codo_topic_link_1" href="/index.php?u=/topic/'.$row['topic_id'].'"><b>'.$row['title'].' ('.$row['opkomst'].')</b></a>';
	            	echo '<br>';
	            }
	            
	            ?>
	
	        </div>
		</article>
	</div>
</div>