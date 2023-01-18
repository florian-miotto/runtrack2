<?php
 
session_start();
 
// Initialize the game X by default
if(!isset($_SESSION['game_state'])) {
  $_SESSION['game_state'] = array_fill(0, 9, "");
  $_SESSION['current_player'] = "X";
}
 
 
for ($i = 1; $i <= 9; $i++) {
  if (isset($_POST['button'.$i])) {
	  handleButtonClick($i-1);
  }
}
 
 
// Function  for each buttons & reset the value of the current player
function handleButtonClick($button_index)
{
 
	if ($_SESSION['game_state'][$button_index] === "") {
 
		$_SESSION['game_state'][$button_index] = $_SESSION['current_player'];
 
		checkForWin();
 
		toggleCurrentPlayer();
 
	}
 
 
}
 
 
// Function to check for wins & rules ----------------works-----
function checkForWin() {
  $game_state = $_SESSION['game_state'];
  if(($game_state[0] === $game_state[1] && $game_state[1] === $game_state[2] && $game_state[0] !== "") ||
  	($game_state[3] === $game_state[4] && $game_state[4] === $game_state[5] && $game_state[3] !== "") ||
	 ($game_state[6] === $game_state[7] && $game_state[7] === $game_state[8] && $game_state[6] !== "") ||
	 ($game_state[0] === $game_state[3] && $game_state[3] === $game_state[6] && $game_state[0] !== "") ||
	 ($game_state[1] === $game_state[4] && $game_state[4] === $game_state[5] && $game_state[1] !== "") ||
	 ($game_state[2] === $game_state[5] && $game_state[5] === $game_state[8] && $game_state[2] !== "") ||
	 ($game_state[0] === $game_state[4] && $game_state[4] === $game_state[8] && $game_state[0] !== "") ||
	 ($game_state[2] === $game_state[4] && $game_state[4] === $game_state[6] && $game_state[2] !== "")
	 ) {
	echo "Player " . $_SESSION['current_player'] . " wins!";
	session_destroy();
  }
}
// Function to toggle the current player------------not used but works-------------
function toggleCurrentPlayer() {
  if($_SESSION['current_player'] === "X") {
	$_SESSION['current_player'] = "O";
  } else {
	$_SESSION['current_player'] = "X";
  }
}
 
//reset the game  -----------------------works-------------
  if (isset($_POST['reset'])) {
	resetGame();
  }
 
  function resetGame() {
	session_destroy();
  }
 
 
?>
<form method="post">
<input type="submit" name="reset" value="Reset">
 
<table>
 
	<?php foreach (range(1, 3) as $ligne) {?>
 
		<tr>
 
			<?php foreach (range(1, 3) as $colonne) {?>
 
				<?php
					$i = ($ligne - 1) * 3 + $colonne;
 
					$affichage =
						("" === $_SESSION['game_state'][$i - 1])
						? "-"
						: $_SESSION['game_state'][$i - 1]
					;
 
				?>
 
				<td>
					<button type="submit" name="button<?php echo htmlspecialchars($i);?>">
						<?php echo htmlspecialchars($affichage);?>
					</button>
				</td>
 
			<?php }?>
 
		</tr>
 
	<?php }?>
 
</table>
</form>