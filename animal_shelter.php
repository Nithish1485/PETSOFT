<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Animal Shelter Booking</title>
    <link rel="stylesheet" href="styles.css">
<style>

    body {
		font-family: Arial, sans-serif;
		background-color: #f2f2f2;
        background-image: url('https://media.istockphoto.com/id/1417882544/photo/large-group-of-cats-and-dogs-looking-at-the-camera-on-blue-background.jpg?s=612x612&w=0&k=20&c=kGKANSIFdNfhBJMipyuaKU4BcVE1oELWev9lF2ickE0=');
        background-repeat: no-repeat;
        background-size: cover;
                
	}


.container {
    display: flex;
    justify-content: space-around;
    margin: 20px;
}

.pet-container {
    background-color: rgba(255,255,255,0.7);
    border: 1px solid #ccc;
    padding: 10px;
    text-align: center;
    width: 200px;
    margin: 10px;
}

.pet-container img {
    border-radius: 50%;
    width: 150px;
    height: 150px;
    object-fit: cover;
}

button {
    width: 50%;
	padding: 10px;
	background-color: #4CAF50;
	color: #fff;
	border: none;
	border-radius: 3px;
	cursor: pointer;
}

span{
    font-weight: bold;
}

p{
    font-weight: 500;
}
</style>
</head>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Animal Shelter Booking</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <!-- Pet 1 -->
        <div class="pet-container">
            <img src="https://images.unsplash.com/photo-1561495376-dc9c7c5b8726?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8bGFicmFkb3IlMjBwdXBweXxlbnwwfHwwfHx8MA%3D%3D">
            <p><span>Species: </span>Dog</p>
            <p><span>Breed: </span>Labrador Retriever</p>
            <p><span>Color: </span>White</p>
            <p><span>Price: </span>7000</p>
            <button onclick="bookNow('Dog', 'Labrador Retriever', 'White')">Book Now</button>
        </div>

        <!-- Pet 2 -->
        <div class="pet-container">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQe6BayWzI1xlYaSX8yLfFF15XXXGR8KyJdFA&usqp=CAU">
            <p><span>Species: </span>Dog</p>
            <p><span>Breed: </span>German Shepherd</p>
            <p><span>Color: </span>Black and Tan</p>
            <p><span>Price: </span>10000</p>
            <button onclick="bookNow('Dog', 'German Shepherd', 'Black and Tan')">Book Now</button>
        </div>

        <!-- Pet 3 -->
        <div class="pet-container">
            <img src="https://www.pupvine.com/wp-content/uploads/2022/07/Golden-Retriever-Colors-Lets-Spin-The-Dazzling-Color-Wheel.jpg">
            <p><span>Species: </span>Dog</p>
            <p><span>Breed: </span>Golden Retriever</p>
            <p><span>Color: </span>Golden</p>
            <p><span>Price: </span>8000</p>
            <button onclick="bookNow('Dog', 'Golden Retriever', 'Golden')">Book Now</button>
        </div>

        <div class="pet-container">
            <img src="https://www.hepper.com/wp-content/uploads/2023/02/pomeranian-dog-in-the-park_Oksamutnaya_Shutterstock.jpg">
            <p><span>Species: </span>Dog</p>
            <p><span>Breed: </span>Pomeranian</p>
            <p><span>Color: </span>Cream</p>
            <p><span>Price: </span>15000</p>
            <button onclick="bookNow('Dog', 'Pomeranian', 'Cream')">Book Now</button>
        </div>
    </div>

    <div class="container">
        <!-- Pet 1 -->
        <div class="pet-container">
            <img src="https://www.wallpaperflare.com/static/525/79/785/cat-grass-green-animals-wallpaper.jpg">
            <p><span>Species: </span>Cat</p>
            <p><span>Breed: </span>Persian</p>
            <p><span>Color: </span>White</p>
            <p><span>Price: </span>20000</p>
            <button onclick="bookNow('Cat', 'Persian', 'White')">Book Now</button>
        </div>

        <!-- Pet 2 -->
        <div class="pet-container">
            <img src="https://i.pinimg.com/736x/6a/a8/e3/6aa8e335be649d8cba23d32b1afa664e.jpg">
            <p><span>Species: </span>Cat</p>
            <p><span>Breed: </span>Chausie</p>
            <p><span>Color: </span>Brown</p>
            <p><span>Price: </span>8000</p>
            <button onclick="bookNow('Cat', 'Chausie', 'Brown')">Book Now</button>
        </div>

        <!-- Pet 3 -->
        <div class="pet-container">
            <img src="https://media.istockphoto.com/id/1441833712/photo/closeup-shot-of-a-shorthair-gray-cat-sitting-on-the-grass-in-the-park-with-blurred-background.jpg?s=612x612&w=0&k=20&c=VNuH2Cp7zZgNT0HLWdDorUZTk_o6fQ2sfdasgR1LoUA=">
            <p><span>Species: </span>Cat</p>
            <p><span>Breed: </span>Korat</p>
            <p><span>Color: </span>Black</p>
            <p><span>Price: </span>12000</p>
            <button onclick="bookNow('Cat', 'Korat', 'Black')">Book Now</button>
        </div>

        <div class="pet-container">
            <img src="https://www.ardeaprints.com/p/172/cat-chartreux-kitten-grass-5280361.jpg.webp">
            <p><span>Species: </span>Cat</p>
            <p><span>Breed: </span>Chartreux</p>
            <p><span>Color: </span>Black</p>
            <p><span>Price: </span>15000</p>
            <button onclick="bookNow('Cat', 'Chartreux', 'Black')">Book Now</button>
        </div>
    </div>

    <div class="container">
        <!-- Pet 1 -->
        <div class="pet-container">
            <img src="https://cafishvet.com/wp-content/uploads/2020/10/gold-fish-1.jpg">
            <p><span>Species: </span>Fish</p>
            <p><span>Breed: </span>Gold Fish</p>
            <p><span>Color: </span>Golden</p>
            <p><span>Price: </span>200</p>
            <button onclick="bookNow('Fish', 'Gold Fish', 'Golden')">Book Now</button>
        </div>

        <!-- Pet 2 -->
        <div class="pet-container">
            <img src="https://a-z-animals.com/media/siamese-fighting-fish-3.jpg">
            <p><span>Species: </span>Fish</p>
            <p><span>Breed: </span>Betta</p>
            <p><span>Color: </span>Blue</p>
            <p><span>Price: </span>300</p>
            <button onclick="bookNow('Fish', 'Betta', 'Blue')">Book Now</button>
        </div>

        <!-- Pet 3 -->
        <div class="pet-container">
            <img src="https://www.shutterstock.com/image-photo/blue-tail-guppy-600nw-1831100851.jpg">
            <p><span>Species: </span>Fish</p>
            <p><span>Breed: </span>Guppy</p>
            <p><span>Color: </span>Moscow Blue</p>
            <p><span>Price: </span>250</p>
            <button onclick="bookNow('Fish', 'Guppy', 'Moscow Blue')">Book Now</button>
        </div>

        <div class="pet-container">
            <img src="https://www.aquariadise.com/wp-content/uploads/2021/03/Red-Cap-Oranda.jpg">
            <p><span>Species: </span>Fish</p>
            <p><span>Breed: </span>Oranda Goldfish</p>
            <p><span>Color: </span>White</p>
            <p><span>Price: </span>600</p>
            <button onclick="bookNow('Fish', 'Oranda Goldfish', 'White')">Book Now</button>
        </div>
    </div>

    <div class="container">
        <!-- Pet 1 -->
        <div class="pet-container">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6hUmvhA19LqOjplNdhlZaVSHGAw78ttu37g&usqp=CAU">
            <p><span>Species: </span>Bird</p>
            <p><span>Breed: </span>Lovebird</p>
            <p><span>Color: </span>Orange</p>
            <p><span>Price: </span>200</p>
            <button onclick="bookNow('Bird', 'Lovebird', 'Orange')">Book Now</button>
        </div>

        <!-- Pet 2 -->
        <div class="pet-container">
            <img src="https://pets-society.com/wp-content/uploads/2023/01/Sun-conure-profile.jpg">
            <p><span>Species: </span>Bird</p>
            <p><span>Breed: </span>Conure</p>
            <p><span>Color: </span>Orange</p>
            <p><span>Price: </span>1200</p>
            <button onclick="bookNow('Bird', 'Conure', 'Orange')">Book Now</button>
        </div>

        <!-- Pet 3 -->
        <div class="pet-container">
            <img src="https://images.unsplash.com/photo-1594524952992-0cddcede63dd?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y29ja2F0b298ZW58MHx8MHx8fDA%3D">
            <p><span>Species: </span>Bird</p>
            <p><span>Breed: </span>Cockatoo</p>
            <p><span>Color: </span>White</p>
            <p><span>Price: </span>4000</p>
            <button onclick="bookNow('Bird', 'Cockatoo', 'White')">Book Now</button>
        </div>

        <div class="pet-container">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5x1ih3htBkInFNkdyvxjVt_5EAdp4l08AGA&usqp=CAU">
            <p><span>Species: </span>Bird</p>
            <p><span>Breed: </span>Macaw</p>
            <p><span>Color: </span>Yellow and Blue</p>
            <p><span>Price: </span>8000</p>
            <button onclick="bookNow('Bird', 'Macaw', 'Yellow and Blue')">Book Now</button>
        </div>
    </div>
    <script>
        function bookNow(species, breed, color) {
            // Redirect to booking page with the selected attributes
            window.location.href = "booking.php?species=" + encodeURIComponent(species) +
                "&breed=" + encodeURIComponent(breed) + "&color=" + encodeURIComponent(color);
        }
    </script>
</body>

</html>

