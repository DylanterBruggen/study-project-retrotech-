<html>
    <form class="rating">
    <label>
        <input type="radio" name="stars" value="1" />
        <span class="icon">★</span>
    </label>
    <label>
        <input type="radio" name="stars" value="2" />
        <span class="icon">★</span>
        <span class="icon">★</span>
    </label>
    <label>
        <input type="radio" name="stars" value="3" />
        <span class="icon">★</span>
        <span class="icon">★</span>
        <span class="icon">★</span>   
    </label>
    <label>
        <input type="radio" name="stars" value="4" />
        <span class="icon">★</span>
        <span class="icon">★</span>
        <span class="icon">★</span>
        <span class="icon">★</span>
    </label>
    <label>
        <input type="radio" name="stars" value="5" />
        <span class="icon">★</span>
        <span class="icon">★</span>
        <span class="icon">★</span>
        <span class="icon">★</span>
        <span class="icon">★</span>
    </label>
    </form>
<script>
    $(':radio').change(function() {
    console.log('New star rating: ' + this.value);
    });
</script>