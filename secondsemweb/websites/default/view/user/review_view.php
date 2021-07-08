<main class="home">
	<div>
		<form action="" method="post">
                <input type="hidden"  name="r_id">
                <label for="name">Your full name: </label>
                <input type="text"  name="name">
                <label for="email">Your email address: </label>
                <input type="text" name="email">
                <label for="rating">Rating:</label>
                <select name="rating" id="rating">
                    <option selected="selected" value="5">5/5</option>
                    <option value="4">4/5</option>
                    <option value="3">3/5</option>
                    <option value="2">2/5</option>
                    <option value="1">1/5</option>
                </select>
                <input type="text"  name="id">    
                <label for="comment">Your comment for this dishes:</label>
                <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
                
                <input type="submit" value="Leave Review"  name="add_review">
       </form>



</main>