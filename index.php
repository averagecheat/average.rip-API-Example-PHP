<center><?php
//replace this with your own informations
$uid = "1";
$username = "anditv21";

//saving api response data in string format.
$injectcount = file_get_contents('https://average.rip/panel/api.php?inject');
$avatarurl = file_get_contents('https://average.rip/panel/api.php?user_pb=' . $username);
$sub = file_get_contents('https://average.rip/panel/api.php?days=' . $username);
$bancheck = file_get_contents('https://average.rip/panel/api.php?bancheck=' . $username);
$verifystatus = file_get_contents('https://average.rip/panel/api.php?verifystatus=' . $username);
$staff = file_get_contents('https://average.rip/panel/api.php?staffcheck=' . $username);
$dcid = file_get_contents('https://average.rip/panel/api.php?getid=' . $username);
$touid = file_get_contents('https://average.rip/panel/api.php?touid=' . $username);
$toname = file_get_contents('https://average.rip/panel/api.php?toname=' . $uid);


echo "<title>average.rip API Example PHP</title>";
$breakline = "<br>";
echo "The total injection count of average is currently: " . $injectcount . $breakline;
echo "Her is $username`s avatar url: " . $avatarurl . $breakline;
echo "$username has $sub days sub left" . $breakline;

if ($ban === "1")
{
    echo "$username is banned." . $breakline;
}
else
{
    echo "$username is not banned." . $breakline;
}

if ($verifystatus === "1")
{
    echo "$username is verified." . $breakline;
}
else
{
    echo "$username is not verified." . $breakline;
}

if ($staff === "False")
{
    echo "$username is not a Staff." . $breakline;
}
else
{
    echo "$username is an $staff." . $breakline;
}

echo "$username`s Discord ID is: $dcid" . $breakline;
echo "$username`s UID is: $touid" . $breakline;
echo "The UID $uid belongs to the user with the name: $toname";

?></center>


<style>
    body{
    font-family: Arial, Helvetica, sans-serif;
    background-color: rgb(26, 26, 26);
    color: white;
}
</style>