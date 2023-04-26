<body>
	<?php 
		require_once 'nav.php';
	?>
	<div class="content-container manage">
		<form>
			<?php
				if(is_array($data['users']) && $data['users'] != ''){
					echo '<table class="table-css">';
					echo '<thead>';
					echo '<tr>';
					echo '<th>UserID</th>';
					echo '<th>User</th>';
					echo '<th>Role</th>';
					echo '<th>Delete</th>';
					echo '</tr>';
					echo '</thead>';
					echo '<tbody>';
					$num = 0;
					foreach($data['users'] as $item){
						echo '<tr id="row-'.$num.'" onmouseover="hoverRow('.$num.')" onmouseleave="notHoverRow('.$num.')">';
						echo '<td>' . $item->Id . '</td>';
						echo '<td>' . $item->Username . '</td>';
						echo '<td id="select-role-'.$num.'" class="centre"><select name="roles" id="roles">';

						foreach(USER_ROLES as $roles){
							echo '<option value="'.$roles.'"';
							if(strtolower($item->Role) == strtolower($roles)){
								echo 'selected>'.$roles.'</option>';
							}
							else {
								echo '>'.$roles.'</option>';
							}
						}

						echo '<td class="centre"><input type="checkbox" id="delete" name="delete"></td>';
						echo '</tr>';
						$num++;
					}
				}
				else if(is_array($data['all_posts']) && $data['all_posts'] != ''){
					echo '<table class="table-css">';
					echo '<thead>';
					echo '<tr>';
					echo '<th>ArticleID</th>';
					echo '<th>Author</th>';
					echo '<th>Article Title</th>';
					echo '<th>Edit</th>';
					echo '<th>Published?</th>';
					echo '<th>Date Updated</th>';
					echo '</tr>';
					echo '</thead>';
					echo '<tbody>';
					$num = 0;
					foreach($data['all_posts'] as $item){
						echo '<tr id="row-'.$num.'" onmouseover="hoverRow('.$num.')" onmouseleave="notHoverRow('.$num.')">';
						echo '<td>' . $item->ArticleID . '</td>';
						echo '<td>' . $item->ArticleAuthor . '</td>';
						echo '<td>' . $item->ArticleTitle . '</td>';
						echo '<td class="centre"><a href='.URL.'/public/edit/'. $item->ArticleID .'>Edit Now</a></td>';

						if ($item->published == '1'){
							echo '<td class="centre"><input type="checkbox" checked disabled="disabled"></td>';
						}
						else {
							echo '<td class="centre"><input type="checkbox" disabled="disabled"></td>';
						}

						echo '<td>' . $item->ArticleDate . '</td>';
						echo '</tr>';

						$num++;
					}
				}	
			?>
					</tbody>
				</table>
			<div class="centre">
				<a href="#" class="bottom-select-buttons">Previous Page</a>

				<?php
					$url = parseUrl();

					if ($url[1] == "users"){
						echo '<a href="#" class="bottom-select-buttons">Save Users</a>';
					}
				?>
				<a href="#" class="bottom-select-buttons">Next Page</a>
			</div>		
		</form>
	</div>
	<script type="text/javascript" src="<?php echo URL?>/public/js/dashboard.js"></script>
</body>