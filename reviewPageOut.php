<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<!-- Page title -->
        <title>Specific Place</title>
        <!-- Reference to CSS -->
        <link rel="stylesheet" href="CSS/reviewPage.css">
	</head>

	<body onload="initMap()">
        <!-- Nav bar -->
		<ul>
			<li style="float:right"><a href="login.php">Login</a></li>
			<li style="float:right"><a href="register.php">Register</a></li>
			<li style="float:right"><a href="search.php">Search</a></li>
		</ul>
        <br><br>
        
        <!-- The columns content -->
        <div class="row">
            <div class="column">
                <h1> [Specific Place] </h1>
                <!-- Google maps content -->
                <div id="map"></div>
                <script src="JS/reviewPage.js"></script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt9desnfMTFacmEAGDmp9KSNxmm9OxSpk&callback=myMap"> </script>
            </div>

            <div class="column">
                <!-- Title -->
                <h2>[Location Name]</h2>
                <table>
                    <tr>
                        <td>Suburb</td>
                        <td>Brisbane</td>
                    </tr>
                    <tr>
                        <td>Average Rating</td>
                        <td>★ ★ ★ ☆ ☆</td>
                    </tr>
                </table>
    
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p> -->
                
                <h2>User Reviews</h2>
                <table>
                    <tr>
                        <td>★ ★ ★ ☆ ☆</td>
                    </tr>
                    <tr>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</td>
                    </tr>
                    <tr>
                        <td>[Username] [Date Posted]</td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td>★ ★ ☆ ☆ ☆</td>
                    </tr>
                    <tr>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</td>
                    </tr>
                    <tr>
                        <td>[Username] [Date Posted]</td>
                    </tr>
                </table>

                <form>
                    <input type="text" name="leaveAReviewBoxOut" placeholder="Sign in or register to leave a review" disabled>
                </form> 
            </div>

            <div id="mapholder"></div>                 
            <!-- Footer -->
            <div class="footer">
                <p>
                    John Tang | Dylan Nguyen
                    <br>
                    CAB230 Semester 1 2018
                </p>
            </div>
        </div>
	</body>
</html>