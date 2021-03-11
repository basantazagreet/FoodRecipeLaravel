<h1>Please enter Recipe details to upload</h1>


<form action="addrecipe" method="POST" enctype="multipart/form-data">
@csrf
<input type="text" name="title" placeholder="Enter Food title">
<br><br>

<textarea name="description" rows="30" cols="50" >Enter food description here</textarea>
<br><br>

<textarea name="ingredients" rows="30" cols="50" >Enter ingredients here, separate 
with comma and enter quantity in bracket</textarea>
<br><br>

<textarea name="steps" rows="30" cols="50" >Enter preparation steps here, separate 
with comma and enter step number</textarea>
<br><br>

<input type="file" name="file">
<br><br>

<input type="radio" id="yes" name="isvegan" value="1">
<label for="yes">Vegan</label>
<input type="radio" id="no" name="isvegan" value="0">
<label for="no">non-Veg</label><br>
<br><br>

<input type="number" name="readyin" placeholder="Enter time dish will be ready (in minutes)">
<br><br>

<input type="text" name="origin" placeholder="Enter Food origin">
<br><br>

<input type="text" name="category" placeholder="Enter Food category eg: breakfast">
<br><br>



<input type="submit" value="Add data">
<input type="reset" values="Cancel">

</form>