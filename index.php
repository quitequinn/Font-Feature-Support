<? include("header.php") ?>


<div class="container main">
	<div class="row">
		<div class="col-sm-12 OT-table">
			
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Font-Feature</th>
						<th>Current Browser Support</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$FF = array('aalt','abvf','abvm','abvs','afrc','akhn','blwf','blwm','blws','calt','case','ccmp','cfar','cjct','clig','cpct','cpsp','cswh','curs','cv01','c2pc','c2sc','dist','dlig','dnom','dtls','expt','falt','fin2','fin3','fina','flac','frac','fwid','half','haln','halt','hist','hkna','hlig','hngl','hojo','hwid','init','isol','ital','jalt','jp78','jp83','jp90','jp04','kern','lfbd','liga','ljmo','lnum','locl','ltra','ltrm','mark','med2','medi','mgrk','mkmk','mset','nalt','nlck','nukt','numr','onum','opbd','ordn','ornm','palt','pcap','pkna','pnum','pref','pres','pstf','psts','pwid','qwid','rand','rclt','rkrf','rlig','rphf','rtbd','rtla','rtlm','ruby','salt','sinf','size','smcp','smpl','ss01','ss02','ss03','ss04','ss05','ss06','ss07','ss08','ss09','ss10','ss11','ss12','ss13','ss14','ss15','ss16','ss17','ss18','ss19','ss20','ssty','stch','subs','sups','swsh','titl','tjmo','tnam','tnum','trad','twid','unic','valt','vatu','vert','vhal','vjmo','vkna','vkrn','vpal','vrt2','zero');
						$counter = 0;
						foreach ($FF as &$i) { 
							$counter = $counter + 1;
							?>
							<tr class="n<?php echo $counter; ?>">
								<td><?php echo $i; ?></td>
								<td class="YN">N</td>
							</tr>

							<style type="text/css" media="screen">
								.OT-table tr.n<?php echo $counter; ?> td.YN { 
									-webkit-font-feature-settings: <?php 
										$ffset = "";
										$ffsetCount = 0;
										foreach ($FF as &$fea) { 
											$ffsetCount = $ffsetCount + 1;
											if ( $ffsetCount > 1){
												$ffset = $ffset . ", ";
											}
											if ( $i == $fea){ 
												$ffset = $ffset . '"' . $fea . '" 1';
											} else {
												$ffset = $ffset . '"' . $fea . '" 0';
											}											
										echo $ffset;
										$ffset = "";
										} ?> !important;

									-moz-font-feature-settings: <?php 
										$ffset = "";
										$ffsetCount = 0;
										foreach ($FF as &$fea) { 
											$ffsetCount = $ffsetCount + 1;
											if ( $ffsetCount > 1){
												$ffset = $ffset . ", ";
											}
											if ( $i == $fea){ 
												$ffset = $ffset . '"' . $fea . '" 1';
											} else {
												$ffset = $ffset . '"' . $fea . '" 0';
											}											
										echo $ffset;
										$ffset = "";
										} ?> !important;

									font-feature-settings: <?php 
										$ffset = "";
										$ffsetCount = 0;
										foreach ($FF as &$fea) { 
											$ffsetCount = $ffsetCount + 1;
											if ( $ffsetCount > 1){
												$ffset = $ffset . ", ";
											}
											if ( $i == $fea){ 
												$ffset = $ffset . '"' . $fea . '" 1';
											} else {
												$ffset = $ffset . '"' . $fea . '" 0';
											}											
										echo $ffset;
										$ffset = "";
										} ?> !important;
								}
							</style>
						<?php } ?>
				</tbody>
			</table>

		</div>
	</div>
</div>

<? include("footer.php") ?>

