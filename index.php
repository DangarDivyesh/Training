<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="/custom.css">
    <link rel="stylesheet" href="/css/responsive.css">
</head>

<body>
    <div class="wrapper">                           
        <div class="form">
            <h2>Html form</h2>
            <form enctype="multipart/form-data">
                <div>
                    <label for="firstname">First Name: </label>
                    <input type="text" required name="firstname" value="" id="firstname">
                </div>

                <div>
                    <label for="lastname">Last Name: </label>
                    <input type="text" required name="lastname" value="" id="lastname">
                </div>

                <div>
                    <label for="email"> E-mail: </label>
                    <input type="email" required name="email" id="email">
                </div>

                <div>
                    <label for="mobile">Mobile No: </label>
                    <input type="text" required pattern="[0-9]{3}" name="mobile" value="" id="mobile">
                    <input type="text" required pattern="[0-9]{7}" name="mobile" value="" id="mobile">
                </div>

                <div>
                    <label for="hobby">Hobby: </label>
                    <label for="cricket"><input type="checkbox" name="cricket" value="cricket"
                            id="cricket">Cricket</label>
                    <label for="singing"><input type="checkbox" name="singing" value="singing"
                            id="singing">Singing</label>
                    <label for="dancing"><input type="checkbox" name="dancing" value="dancing"
                            id="dancing">Dancing</label>
                    <label for="other"><input type="checkbox" name="other" value="other" id="other">Other</label>
                </div>

                <div>
                    <label for="image">Image :</label>
                    <input type="file" name="image" id="image">
                </div>

                <div>
                    <label for="contect">Preferd method of contect: </label>
                    <label for="email"><input type="radio" name="contect">E-mail</label>
                    <label for="phone"><input type="radio" name="contect">Phone</label>
                    <label for="either"><input type="radio" name="contect">Either</label>
                </div>

                <div>
                    <label for="service">Service :</label>
                    <select name="service" id="service" required>
                        <option value="Please S" disabled selected>Please Select</option>
                        <option value="service1">Service1</option>
                        <option value="service2">Service2</option>
                        <option value="service3">Service3</option>
                        <option value="service4">Service4</option>
                        <option value="service5">Service5</option>
                        <option value="service6">Service6</option>
                        <option value="service7">Service7</option>
                        <option value="service8">Service8</option>
                        <option value="service9">Service9</option>
                    </select>
                </div>

                <div>
                    <label for="stylist">Stylist :</label>
                    <select name="stylist" id="service" multiple required>
                        <option value="please" disabled selected>please select multiple</option>
                        <option value="stylist1">stylist1</option>
                        <option value="stylist2">stylist2</option>
                        <option value="stylist3">stylist3</option>
                        <option value="stylist4">stylist4</option>
                        <option value="stylist5">stylist5</option>
                        <option value="stylist6">stylist6</option>
                        <option value="stylist7">stylist7</option>
                        <option value="stylist8">stylist8</option>
                        <option value="stylist9">stylist9</option>
                    </select>
                </div>

                <div>
                    <label for="date">Date : </label>
                    <input type="date" required name="date" id="date">
                </div>

                <div>
                    <label>Add Me To Your Mail List</label>
                </div>
                <div>
                    <label for="clk"><input type="checkbox" required name="clk">Yes Please</label>
                </div>

                <div>
                    <button type="submit">REQUEST AND APPOINTMENT</button>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="FORMFOLD/js/custom.js"></script>
</body>
</html>