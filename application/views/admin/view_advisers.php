<div class="pure-menu adminnav" id="cssmenu">
	<ul class="pure-menu-list custom-restricted-width">

		<li class="pure-menu-item pure-menu-selected">
			<a href="<?php echo site_url('admin') ?>" class="pure-menu-link navLink" id="logs">Logs</a>
		</li>
		
		<li class='active has-sub'><a href='#'><span>Add</span></a>
			<ul>
				<li class='last'><a href='<?php echo site_url('admin/register') ?>'><span>Adviser</span></a>
				</li>
				<li class='last'><a href='<?php echo site_url('admin/add_form') ?>'><span>Student</span></a>
				</li>
			</ul>
		</li>
		
		<li class='active has-sub'><a href='#'><span>Update</span></a>
			<ul>
				<li class='last'><a href='#'><span>Adviser</span></a>
				</li>
				<li class='last'><a href='#'><span>Student</span></a>
				</li>
			</ul>
		</li>

		<li class='active has-sub'><a href='#'><span>View</span></a>
			<ul>
				<li class='last'><a href='<?php echo site_url('admin/view_advisers') ?>'><span>Adviser</span></a>
				</li>
				<li class='last'><a href='<?php echo site_url('admin/view_students') ?>'><span>Student</span></a>
				</li>
				<li class='last'><a href='<?php echo site_url('admin/noOfGraduates') ?>'><span>Number of Graduates</span></a>
				</li>
			</ul>
		</li>

		<li class='active has-sub'><a href='#'><span>Delete</span></a>
			<ul>
				<li class='last'><a href='<?php echo site_url('admin/delAdviser') ?>'><span>Adviser</span></a>
				</li>
				<li class='last'><a href='<?php echo site_url('admin/delete') ?>'><span>Student</span></a>
				</li>
			</ul>
		</li>

	</ul>
</div>

<center>
	<div class="body-panel pure-u-2-5 tableClass">
		<table id="table" class="display" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th scope="col">Employee Number</th>
					<th scope="col">User Name</th>
					<th scope="col">Last Name</th>
					<th scope="col">First Name</th>
					<th scope="col">Middle Name</th>
					<th scope="col">Specialization</th>
					<th scope="col">Level</th>
				</tr>
			</thead>
			<tbody>
			
			<?php
			if (isset($list['advisers'])){
				foreach ($list['advisers'] as $log){
					echo '<tr>';
					echo '<td>' . $log->employee_number . '</td>';
					echo '<td>' . $log->username . '</td>';
					echo '<td>' . $log->last_name . '</td>';
					echo '<td>' . $log->first_name . '</td>';
					echo '<td>' . $log->middle_name . '</td>';
					echo '<td>' . $log->specialization . '</td>';
					echo '<td>' . $log->level . '</td>';
					echo '</tr>';
				}
			} else {
				echo "No advisers registered.";
			}
			?>
			</tbody>
		</table>
	</div>
</center>