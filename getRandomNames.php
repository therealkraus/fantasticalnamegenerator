<?php
include("includes/../_config.php");

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

//Load data from database into array
function PushDataIntoArray($data)
{
  $newArray = array();
  if ($data->num_rows > 0) 
  {
    while ($row = $data->fetch_assoc()) 
    {
      array_push($newArray, $row);
    }
  }
  return $newArray;
}

function FormatData($result, $result2, $result3)
{
  $result_array = array();
  $result_array = array_merge(PushDataIntoArray($result), PushDataIntoArray($result2), PushDataIntoArray($result3));

  $result_array = AddPrefix($result_array);
  $result_array = AddAmpersand($result_array);
  shuffle($result_array);

  echo json_encode($result_array);
}

//Add 'and' to name
function AddAmpersand($newArray)
{
  for ($i = 1; $i <= 3; $i++) {
    $newArray[$i]["adjective_nm"] = $newArray[$i]["adjective_nm"] . " and ";
  }
  return $newArray;
}

//Add 'The' prefix to name
function AddPrefix($newArray)
{
  for ($i = 4; $i <= 6; $i++) {
    $newArray[$i]["adjective_nm"] = "The " . $newArray[$i]["adjective_nm"];
  }
  return $newArray;
}

//TODO add a catch here to check if $data exists
$pagename = $_POST['pagename'];
if ($pagename == "alchemy.php") 
{
  $sql = "SELECT TRIM(adjective_nm) as adjective_nm, TRIM(noun_nm) as noun_nm FROM adjectives INNER JOIN nouns ON adjectives.alchemy_shop_ind= 1 AND nouns.alchemy_shop_ind = 1 WHERE LEFT(UPPER(TRIM(adjective_nm)), 1) = LEFT(UPPER(TRIM(noun_nm)), 1) ORDER BY RAND() LIMIT 4";
  $result = $conn->query($sql);

  $sql2 = "SELECT TRIM(adjective_nm) as adjective_nm, TRIM(noun_nm) as noun_nm FROM adjectives INNER JOIN nouns ON adjectives.alchemy_shop_ind= 1 AND nouns.alchemy_shop_ind = 1 ORDER BY RAND() LIMIT 4";
  $result2 = $conn->query($sql2);

  $sql3 = "SELECT TRIM(n1.noun_nm) as adjective_nm, TRIM(n2.noun_nm) as noun_nm FROM nouns as n1, nouns as n2 WHERE n1.alchemy_shop_ind = 1 AND n2.alchemy_shop_ind = 1 ORDER BY RAND() LIMIT 2";
  $result3 = $conn->query($sql3);

  FormatData($result, $result2, $result3);
} 
elseif ($pagename == "tavern.php") 
{
  $sql = "SELECT TRIM(adjective_nm) as adjective_nm, TRIM(noun_nm) as noun_nm FROM adjectives INNER JOIN nouns ON adjectives.tavern_ind= 1 AND nouns.tavern_ind = 1 WHERE LEFT(UPPER(TRIM(adjective_nm)), 1) = LEFT(UPPER(TRIM(noun_nm)), 1) ORDER BY RAND() LIMIT 3";
  $result = $conn->query($sql);

  $sql2 = "SELECT TRIM(adjective_nm) as adjective_nm, TRIM(noun_nm) as noun_nm FROM adjectives INNER JOIN nouns ON adjectives.tavern_ind= 1 AND nouns.tavern_ind = 1 ORDER BY RAND() LIMIT 4";
  $result2 = $conn->query($sql2);

  $sql3 = "SELECT TRIM(n1.noun_nm) as adjective_nm, TRIM(n2.noun_nm) as noun_nm FROM nouns as n1, nouns as n2 WHERE n1.tavern_ind = 1 AND n2.tavern_ind = 1 ORDER BY RAND() LIMIT 3";
  $result3 = $conn->query($sql3);

  FormatData($result, $result2, $result3);
}

elseif ($pagename == "blacksmith.php") 
{
  $sql = "SELECT TRIM(adjective_nm) as adjective_nm, TRIM(noun_nm) as noun_nm FROM adjectives INNER JOIN nouns ON adjectives.blacksmith_ind= 1 AND nouns.blacksmith_ind = 1 WHERE LEFT(UPPER(TRIM(adjective_nm)), 1) = LEFT(UPPER(TRIM(noun_nm)), 1) ORDER BY RAND() LIMIT 3";
  $result = $conn->query($sql);

  $sql2 = "SELECT TRIM(adjective_nm) as adjective_nm, TRIM(noun_nm) as noun_nm FROM adjectives INNER JOIN nouns ON adjectives.blacksmith_ind= 1 AND nouns.blacksmith_ind = 1 ORDER BY RAND() LIMIT 4";
  $result2 = $conn->query($sql2);

  $sql3 = "SELECT TRIM(n1.noun_nm) as adjective_nm, TRIM(n2.noun_nm) as noun_nm FROM nouns as n1, nouns as n2 WHERE n1.blacksmith_ind = 1 AND n2.blacksmith_ind = 1 ORDER BY RAND() LIMIT 3";
  $result3 = $conn->query($sql3);

  FormatData($result, $result2, $result3);
}

elseif ($pagename == "general.php") 
{
  $sql = "SELECT TRIM(adjective_nm) as adjective_nm, TRIM(noun_nm) as noun_nm FROM adjectives INNER JOIN nouns ON adjectives.general_shop_ind= 1 AND nouns.general_shop_ind = 1 WHERE LEFT(UPPER(TRIM(adjective_nm)), 1) = LEFT(UPPER(TRIM(noun_nm)), 1) ORDER BY RAND() LIMIT 3";
  $result = $conn->query($sql);

  $sql2 = "SELECT TRIM(adjective_nm) as adjective_nm, TRIM(noun_nm) as noun_nm FROM adjectives INNER JOIN nouns ON adjectives.general_shop_ind= 1 AND nouns.general_shop_ind = 1 ORDER BY RAND() LIMIT 4";
  $result2 = $conn->query($sql2);

  $sql3 = "SELECT TRIM(n1.noun_nm) as adjective_nm, TRIM(n2.noun_nm) as noun_nm FROM nouns as n1, nouns as n2 WHERE n1.general_shop_ind = 1 AND n2.general_shop_ind = 1 ORDER BY RAND() LIMIT 3";
  $result3 = $conn->query($sql3);

  FormatData($result, $result2, $result3);
}

elseif ($pagename == "stable.php") 
{
  $sql = "SELECT TRIM(adjective_nm) as adjective_nm, TRIM(noun_nm) as noun_nm FROM adjectives INNER JOIN nouns ON adjectives.stables_ind= 1 AND nouns.stables_ind = 1 WHERE LEFT(UPPER(TRIM(adjective_nm)), 1) = LEFT(UPPER(TRIM(noun_nm)), 1) ORDER BY RAND() LIMIT 3";
  $result = $conn->query($sql);

  $sql2 = "SELECT TRIM(adjective_nm) as adjective_nm, TRIM(noun_nm) as noun_nm FROM adjectives INNER JOIN nouns ON adjectives.stables_ind= 1 AND nouns.stables_ind = 1 ORDER BY RAND() LIMIT 4";
  $result2 = $conn->query($sql2);

  $sql3 = "SELECT TRIM(n1.noun_nm) as adjective_nm, TRIM(n2.noun_nm) as noun_nm FROM nouns as n1, nouns as n2 WHERE n1.stables_ind = 1 AND n2.stables_ind = 1 ORDER BY RAND() LIMIT 3";
  $result3 = $conn->query($sql3);

  FormatData($result, $result2, $result3);
}

elseif ($pagename == "magic.php") 
{
  $sql = "SELECT TRIM(adjective_nm) as adjective_nm, TRIM(noun_nm) as noun_nm FROM adjectives INNER JOIN nouns ON adjectives.magic_shop_ind= 1 AND nouns.magic_shop_ind = 1 WHERE LEFT(UPPER(TRIM(adjective_nm)), 1) = LEFT(UPPER(TRIM(noun_nm)), 1) ORDER BY RAND() LIMIT 3";
  $result = $conn->query($sql);

  $sql2 = "SELECT TRIM(adjective_nm) as adjective_nm, TRIM(noun_nm) as noun_nm FROM adjectives INNER JOIN nouns ON adjectives.magic_shop_ind= 1 AND nouns.magic_shop_ind = 1 ORDER BY RAND() LIMIT 4";
  $result2 = $conn->query($sql2);

  $sql3 = "SELECT TRIM(n1.noun_nm) as adjective_nm, TRIM(n2.noun_nm) as noun_nm FROM nouns as n1, nouns as n2 WHERE n1.magic_shop_ind = 1 AND n2.magic_shop_ind = 1 ORDER BY RAND() LIMIT 3";
  $result3 = $conn->query($sql3);

  FormatData($result, $result2, $result3);
}

$conn->close();