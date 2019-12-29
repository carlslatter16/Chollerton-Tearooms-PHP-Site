<?php
  function prepareInput() /**A function to santatise the inputted data for security and place
                          data into a easier defined array**/
  {
    $input = array(htmlspecialchars($_POST['forename']), htmlspecialchars($_POST['surname']),
                   htmlspecialchars($_POST['email']), htmlspecialchars($landline = $_POST['landline']),
                   htmlspecialchars($_POST['mobile']), htmlspecialchars($_POST['postaladdress']),
                   htmlspecialchars($_POST['deliverymethod']), htmlspecialchars($_POST['category']));
    insertRecord($input); /**I pass the form data in the new array to the function to upload it**/
    fetchInput($input); /**I pass the form data in the new array to the function to Show it to the user**/
  }

  function insertRecord($input) /**A function to upload the record using the passed array or give an error**/
  {
    include 'connect.php'; /**Generic connection**/

    $queryCommand = "INSERT INTO CT_expressedInterest (forename, surname, postalAddress, landLineTelNo, mobileTelNo, email, sendMethod, catID)
    VALUES ('$input[0]', '$input[1]', '$input[5]', '$input[3]', '$input[4]', '$input[2]', '$input[6]', '$input[7]')";

    if ($conn->query($queryCommand) === FALSE)
    {
      echo "Input Error: " . $queryCommand . "<br>" . $conn->error;
    }

    $conn->close();
  }

  function fetchTable() /**A function to fetch the table for the admin page,
                          it first sets up the table and then itterates through to fill it**/
  {
    include 'connect.php'; /**Generic connection**/

  	$result = mysqli_query($conn,"SELECT * FROM CT_expressedInterest INNER JOIN CT_category ON CT_category.catID = CT_expressedInterest.catID ORDER BY surname");
  	echo '<table><caption>SQL Expressed Interest Table (Scroll Horizontally On Smaller Devices)</caption><tr><th>Forename</th><th>Surname</th><th>Postal Address</th><th>Landline Telephone Number</th><th>Mobile Telephone Number</th><th>Email</th><th>Send Method</th><th>Category</th></tr>';

  	while($row = mysqli_fetch_array($result))
  	{
  	   echo '<tr>';
  		 echo '<td>'.$row["forename"].'</td>'; /**data is already sanatized on upload so it not required here**/
  		 echo '<td>'.$row["surname"].'</td>';
  		 echo '<td>'.$row["postalAddress"].'</td>';
  		 echo '<td>'.$row["landLineTelNo"].'</td>';
  		 echo '<td>'.$row["mobileTelNo"].'</td>';
  		 echo '<td>'.$row["email"].'</td>';
  		 echo '<td>'.$row["sendMethod"].'</td>';
  		 echo '<td>'.$row["catDesc"].'</td>'; /**catDesc is usable due to the join above to link the two fields in the two tables**/
  		 echo '</tr>';
  	}
  	echo '</table>';
  }

  function fetchInput($input) /**A function to take a passed array of input, set up a table,
                              santatize the data since it has not yet been uploaded and it
                              could be an aveneue of attack, and print the data in a order
                              matching the sql table**/
  {
    include 'connect.php';

    echo '<table><caption>Thank You, We Will Be In Contact Soon! (Scroll Horizontally On Smaller Devices)</caption><tr><th>Forename</th><th>Surname</th><th>Postal Address</th><th>Landline Telephone Number</th><th>Mobile Telephone Number</th><th>Email</th><th>Send Method</th><th>Category</th><th>Category Image</th></tr>';

    echo '<tr>';
    echo '<td>'.htmlspecialchars($input[0]).'</td>';
    echo '<td>'.htmlspecialchars($input[1]).'</td>';
    echo '<td>'.htmlspecialchars($input[5]).'</td>';
    echo '<td>'.htmlspecialchars($input[3]).'</td>';
    echo '<td>'.htmlspecialchars($input[4]).'</td>';
    echo '<td>'.htmlspecialchars($input[2]).'</td>';
    echo '<td>'.htmlspecialchars($input[6]).'</td>';

    /**Simple statments to bind the ID and Desc without a connection
    (since this is just from local input at this time), print the desc and a relevant image **/

    if($input[7]=='c1')
    {
      echo '<td>Tearoom</td>';
      echo '<td><img src="tearoomicon.png" alt="TearoomIcon" class="icons"></td>';
    }

    if($input[7]=='c2')
    {
        echo '<td>Craft Shop</td>';
        echo '<td><img src="crafticon.png" alt="CraftIcon" class="icons"></td>';
    }

    if($input[7]=='c3')
    {
        echo '<td>Village Store</td>';
        echo '<td><img src="shopicon.png" alt="ShopIcon" class="icons"></td>';
    }

    if($input[7]=='c4')
    {
      echo '<td>Post Office</td>';
      echo '<td><img src="posticon.png" alt="PostIcon" class="icons"></td>';
    }

    if($input[7]=='c5')
    {
      echo '<td>Bed and Breakfast</td>';
      echo '<td><img src="B&Bicon.png" alt="B&BIcon" class="icons"></td>';
    }

    echo '</tr>';
      echo '</table>'; /**End of table**/
  }

    function fetchCategories() /**A function to dynamically find catDescs
                                and iterate through, while matching it with
                                it's relevant ID**/
    {
      include 'connect.php';
      $sql = "SELECT catDesc FROM CT_category";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) /**If query gives more than 0 results**/
        {
          while($row = $result->fetch_assoc()) /**While it is fetching**/
          {
            foreach($row as $row =>$value) /**With each found record do below**/
            {
              if(!isset($id)) /**Prevents the ID being set as 0 constantly**/
              {
                $id=0; /**No category will have an ID at 0 so it makes sense to start there**/
              }

              $id++; /**Add to ID everytime a new record is found**/
              echo "<option value='c$id' required>$value</option><br>"; /**Binds the description found to the itterated ID for use later**/
            }
          }
        }
     else
     {
       echo "<option>", "No Catagories Available", "</option>"; /**Added just in case the database was corrupted and the like**/
     }
    }
?>
