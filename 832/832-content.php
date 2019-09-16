<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
	<div class="type-832">
		<div class="container content">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="pricing hover-effect">
						<div class="pricing-head">
							<h3>Begginer 
								<span> Officia deserunt mollitia </span>
							</h3>
							<h4><i>$</i>5<i>.49</i>
							<span>Per Month </span>
							</h4>
						</div>

						<ul class="pricing-content list-unstyled">
							<li>
								At vero eos
							</li>
							<li>
								No Support
							</li>
							<li>
								Fusce condimentum
							</li>
							<li>
								Ut non libero
							</li>
							<li>
								Consecte adiping elit
							</li>
						</ul>

						<div class="pricing-footer">
							
							<a href="#" class="btn yellow-crusta">
							Sign Up
							</a>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="pricing hover-effect">
						<div class="pricing-head">
							<h3>Pro <span>
							Officia deserunt mollitia </span>
							</h3>
							<h4><i>$</i>8<i>.69</i>
							<span>
							Per Month </span>
							</h4>
						</div>
						<ul class="pricing-content list-unstyled">
							<li>
								At vero eos
							</li>
							<li>
								No Support
							</li>
							<li>
								Fusce condimentum
							</li>
							<li>
								Ut non libero
							</li>
							<li>
								Consecte adiping elit
							</li>
						</ul>
						<div class="pricing-footer">
							
							<a href="#" class="btn yellow-crusta">
							Sign Up
							</a>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="pricing hover-effect">
						<div class="pricing-head">
							<h3>Expert <span>
							Officia deserunt mollitia </span>
							</h3>
							<h4><i>$</i>13<i>.99</i>
							<span>
							Per Month </span>
							</h4>
						</div>
						<ul class="pricing-content list-unstyled">
							<li>
								At vero eos
							</li>
							<li>
								No Support
							</li>
							<li>
								Fusce condimentum
							</li>
							<li>
								Ut non libero
							</li>
							<li>
								Consecte adiping elit
							</li>
						</ul>
						<div class="pricing-footer">
							
							<a href="#" class="btn yellow-crusta">
							Sign Up
							</a>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="pricing hover-effect">
						<div class="pricing-head">
							<h3>Hi-Tech <span>
							Officia deserunt mollitia </span>
							</h3>
							<h4><i>$</i>99<i>.00</i>
							<span>
							Per Month </span>
							</h4>
						</div>
						<ul class="pricing-content list-unstyled">
							<li>
								At vero eos
							</li>
							<li>
								No Support
							</li>
							<li>
								Fusce condimentum
							</li>
							<li>
								Ut non libero
							</li>
							<li>
								Consecte adiping elit
							</li>
						</ul>
						<div class="pricing-footer">
							
							<a href="#" class="btn yellow-crusta">
							Sign Up
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>