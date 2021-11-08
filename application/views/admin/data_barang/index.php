                <!-- Begin Page Content -->
                <div class="container-fluid">
                   
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800 text-primary"> <?= $title?></h1>


					<div class="row">
						<div class="col-lg-12">
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">
									DataTables Example
								</h6>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table
										class="table table-bordered"
										id="dataTable"
										width="100%"
										cellspacing="0"
									>
										<thead>
											<tr>
												<th>Name</th>
												<th>Position</th>
												<th>Office</th>
												<th>Age</th>
												<th>Start date</th>
												<th>Salary</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>Name</th>
												<th>Position</th>
												<th>Office</th>
												<th>Age</th>
												<th>Start date</th>
												<th>Salary</th>
											</tr>
										</tfoot>
										<tbody>
											<tr>
												<td>Tiger Nixon</td>
												<td>System Architect</td>
												<td>Edinburgh</td>
												<td>61</td>
												<td>2011/04/25</td>
												<td>$320,800</td>
											</tr>
											<tr>
												<td>Garrett Winters</td>
												<td>Accountant</td>
												<td>Tokyo</td>
												<td>63</td>
												<td>2011/07/25</td>
												<td>$170,750</td>
											</tr>
											<tr>
												<td>Ashton Cox</td>
												<td>Junior Technical Author</td>
												<td>San Francisco</td>
												<td>66</td>
												<td>2009/01/12</td>
												<td>$86,000</td>
											</tr>
											<tr>
												<td>Cedric Kelly</td>
												<td>Senior Javascript Developer</td>
												<td>Edinburgh</td>
												<td>22</td>
												<td>2012/03/29</td>
												<td>$433,060</td>
											</tr>
											<tr>
												<td>Airi Satou</td>
												<td>Accountant</td>
												<td>Tokyo</td>
												<td>33</td>
												<td>2008/11/28</td>
												<td>$162,700</td>
											</tr>
											<tr>
												<td>Brielle Williamson</td>
												<td>Integration Specialist</td>
												<td>New York</td>
												<td>61</td>
												<td>2012/12/02</td>
												<td>$372,000</td>
											</tr>
											<tr>
												<td>Herrod Chandler</td>
												<td>Sales Assistant</td>
												<td>San Francisco</td>
												<td>59</td>
												<td>2012/08/06</td>
												<td>$137,500</td>
											</tr>
											<tr>
												<td>Rhona Davidson</td>
												<td>Integration Specialist</td>
												<td>Tokyo</td>
												<td>55</td>
												<td>2010/10/14</td>
												<td>$327,900</td>
											</tr>
											<tr>
												<td>Colleen Hurst</td>
												<td>Javascript Developer</td>
												<td>San Francisco</td>
												<td>39</td>
												<td>2009/09/15</td>
												<td>$205,500</td>
											</tr>
											<tr>
												<td>Sonya Frost</td>
												<td>Software Engineer</td>
												<td>Edinburgh</td>
												<td>23</td>
												<td>2008/12/13</td>
												<td>$103,600</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<div class="row ">
								<div class="col-sm-12 col-md-5 ml-lg-2">
									<div
										class="dataTables_info"
										id="dataTable_info"
										role="status"
										aria-live="polite"
									>
										Showing 1 to 10 of 57 entries
									</div>
								</div>
								<div class="col-sm-12 col-md-7 pr-lg-2">
									<div
										class="dataTables_paginate paging_simple_numbers"
										id="dataTable_paginate"
									>
										<ul class="pagination active">
											<li
												class="paginate_button page-item previous disabled"
												id="dataTable_previous"
											>
												<a
													href="#"
													aria-controls="dataTable"
													data-dt-idx="0"
													tabindex="0"
													class="page-link"
													>Previous</a
												>
											</li>
											<li class="paginate_button page-item active">
												<a
													href="#"
													aria-controls="dataTable"
													data-dt-idx="1"
													tabindex="0"
													class="page-link"
													>1</a
												>
											</li>
											<li class="paginate_button page-item">
												<a
													href="page2.php"
													aria-controls="dataTable"
													data-dt-idx="2"
													tabindex="0"
													class="page-link"
													>2</a
												>
											</li>
											<li class="paginate_button page-item">
												<a
													href="#"
													aria-controls="dataTable"
													data-dt-idx="3"
													tabindex="0"
													class="page-link"
													>3</a
												>
											</li>
											<li class="paginate_button page-item">
												<a
													href="#"
													aria-controls="dataTable"
													data-dt-idx="4"
													tabindex="0"
													class="page-link"
													>4</a
												>
											</li>
											<li class="paginate_button page-item">
												<a
													href="#"
													aria-controls="dataTable"
													data-dt-idx="5"
													tabindex="0"
													class="page-link"
													>5</a
												>
											</li>
											<li class="paginate_button page-item">
												<a
													href="#"
													aria-controls="dataTable"
													data-dt-idx="6"
													tabindex="0"
													class="page-link"
													>6</a
												>
											</li>
											<li class="paginate_button page-item next" id="dataTable_next">
												<a
													href="#"
													aria-controls="dataTable"
													data-dt-idx="7"
													tabindex="0"
													class="page-link"
													>Next</a
												>
											</li>
										</ul>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

 