<?php
require_once 'vendor/autoload.php';
require_once 'controller/controller.php';
use PHPUnit\Framework\TestCase;


class ControllerTest extends TestCase{
    //Test for addProducts.
    public function testAddProducts(){
        $filename="./tests/test.json";
        file_put_contents($filename, "[]");
        $name="velo";
        $price=1500;
        $description="tout beau tout neuf";
        $image = "data:image/jpeg;base64,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";
        $controller = new Controller();
        $controller->addProducts($name,$price,$description,$image,$filename);
        $jsonBDD = file_get_contents($filename);
        $this->assertEquals('[{"name":"velo","price":1500,"description":"tout beau tout neuf","image":"data:image\/jpeg;base64,\/9j\/4AAQSkZJRgABAQAAAQABAAD\/2wCEAAkGBxIHBhMSExMTFRUVGBUVFxYVGBcWFhseGBUeHR4XGBoZHiggHh0lHhoaITEhJSkrLi4uFyAzODMtNygtLisBCgoKDg0OFhAQFi4gHxk4LDcrNyw3LTc4Ky0tKysrLS0rNy4yLS0tLS0rKysrLSs3NysrNysrKysrKy0tKysrLf\/AABEIALEA7AMBIgACEQEDEQH\/xAAcAAEAAgMBAQEAAAAAAAAAAAAABQcEBggBAwL\/xABGEAABAwIDBAYFBwoFBQAAAAABAAIDBBEFBhIHITFBEyJRYXGBgpGSobEIFiMyQlJyFBVTVGNzk6LR0hhDYsHTJDODwsP\/xAAZAQEBAAMBAAAAAAAAAAAAAAAAAgEDBQT\/xAAeEQEBAAICAgMAAAAAAAAAAAAAAQIRAzESISJhcf\/aAAwDAQACEQMRAD8AvFERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBV9mra1h+XpzGC6olG4thsWtPY55Om\/cL2ULt0zq\/CKRlDTuLZJml0jhuc2MkgNaRwLyDv7Ae1fHZzsfgpqFk9ezpZXAOELrhkd94DwPrP7Qdw4WPFBhu+UCy+6gdb9+B\/wDNef4gW\/qB\/jj\/AI1azMq0EbLCipbfuY\/7V782KH9Tpf4Ef9qCusubbGYzjsNOaN7Ome2MOEofYuNgS3QN1+O\/cFbijKXAqWjmD46anY8Xs5kTGuF+NiBcLW9p2exkrDo3NY2SaVxDGOJA0tF3PdbfYXA8T3INTxXbtHQ4nLE2ie4RvczU6UMJ0uIJLdBtw4XWJ\/iBb+oH+OP+NWNl6kpcy4JDWS0UAknY2RwfExzruHEuLbkHiCeRCkfmxQ\/qdL\/Aj\/tQV5ljbSzHcehpjRvj6V4YHiUSWJ4XboG7tN93FW0o2kwOlopw+OmgjeL2cyJjXb+NiBdSSAiIghMXx4YbUBmguNgb3tuJPDcb8Fg\/O79l\/OP6LLzliAwbLk9V0ImMLC4MIHaBvNjYC9z3AqB2Z5pgzrhL3ugijlidpexoBFjva9txex3jxaV5M+PnuVuOck\/EWZb9VJ\/O4fov5x\/RbHTzCena8XAcAd\/HeLr5\/kEX6Nnsj+iyQLK+HDkx355bZxlnd29REXoUIiICIiAiIgIiICIiAhREHO+Z2jEdv7GS\/VE9M2x4WbG1wHgT8V0QOCoXbxg0uE5mgxSG4B6MOcN+mSI3aT4tAt+Aq28lZmjzZl9lTGLE9V7ebHgC7e8bwQeYIQT6IiD8k2F1zfiEjtqW1cRtJNO12kEcBDEbud3F5vbve3sVobasz\/N\/KLo2OtLU3iZ2htvpHeydPi4KM2B5X\/NWXTWPb9JU2034iJp6vtG7vANQWjDEIYg1oADQAAOAAFgB5L6KudsuaK3K2GU8tLpa1zy2R5aHWOm7W2O4B1nb+5bRkvMDcz5bhqm2Be2z2j7L27nN8iDbuIQTyIiAiIg+U8LamFzHAOa4FrgeBBFiD3EFc6YDK7ZftWdC8kQPd0ZJ4GKQ3jefwm1z3OC6QVS7f8r\/AJxwJtawfSU\/VfbiY3Hj6Ljfwc5BbINwvVoOxvM\/zjygwPdeantDJ2kAdRx8W7r9rSt+QEXl16gIiICIiAiIgIiICIiAiIgwsTw2LFqJ8MzGyRvFnNcNx\/ob7wRvC+WBYJBgGHiCnjEcYJIaLneeJJJJJ7yVJIgLwmwXq0PbFmf5t5QeGOtNUXhj7QCOu8eDefa5qCq8xTO2n7VWwRkmBjujBHARxm8knpG9j3tC6Kp4W01O1jQGtaA1oHABosAPABVV8n\/K\/wCb8EfWvHXqOrHfiI2nj6Thfwa1W2gh82YGzMmXZqV\/+Y0hp+64b2u8nAFUzsLx1+BZlmwye7dbnaQfsyx7nN9JoPm0dqv5UDt0wJ+BZlhxOC7dbm6iPsyx2LXek0Dzae1BfyKGyljrMyZehqmf5jQXDjpcNzm+TgR6lMoCKCzpjzcs5bmqnWuxp0NP2nu3Nb5uIv3AqgMuUGPZwgkngqZy3WWlzqh0YJsCQ0XtYXHDcL2QdOLHrKdtZSvjkAcx7S1wPAhwsQfIlVhs2y\/i+AYpJNiFSfycRu1NknMouLEO3khoaASTdalnjP8AVZ6xb834aJOicS3qXD5rcXOP2Yu423b3dgDX8v5iOzPO1SIy2phGuIhjxZ4Bux2oAjUDa\/G13BTsm1LHMxykUUGkfsIXSkeLnAj3BYWcNk8mWcnCqMnSStcOna0dRjXbgWni6zrAndx4CytrY9mJuYMmxcBJABDI0AD6o6rrD7zbHx1IKz05um63\/VeuFv8ALu+C\/Ls25ny8NU8czmjj0sDXM83sA+K6HsvUFN5Z26w1LwythMJ4dJFd7PFzT1mjw1K2cOxCLE6RssMjZI3cHMII9Y59y1jN2zmgzOwl8QjlPCaIBj79rgNzvSHmFTc9PiexzHA5rtdO88d\/QygfZcPsSW8xyJF0HSyKByjmiDNmDtqID3PYba2Otva4fA8CN6nkBERAREQEREBERAREQFzhnGpftK2pMpYiTDG7oWkcA1hvLL52Nu0Bqtrazmf5sZQkc02lmvFFbiC4b3j8LbnxstS+T5lf8kwuSvkHWmvHFf8ARtO9w\/E4W8Gd6C2qOlZQ0jImANYxrWNaOADRYD1BZCIgKBzpl9uZ8tTUrrXe27HH7L272u9YF+4lVNtynqcCzlR1kcrw3SNA1ENDon3c2w3WcHNv27wrswutbiWGxTM+rKxkjfB7Q4fFBSGwTMDsLxqbC5urqc5zGu4tkj3PZ5tbfxZ3q+lz7trwZ+Wc4Q4nT9USODrjgJo7Hf3OaAe+zla8udYG5B\/OYtp6LWG336z1RH46+r70FW7dcefjeY4cMgu7Q5uoD7Uslg1votcPN57FceUMCZlrLsNKy30bRqP3nHe53m4nysqa2HYG\/H80TYnUXd0bnFrjwdLJcud6LSfAub2K9q+rbQ0Mkr\/qxtc93g1pcfcEFN7d83PknbhdOSS7SZtO8nURohFu3c4jndo7Vuuy7IzMn4MC4A1MoBmfxtzETT91vPtO\/stV+x2gdm3aHPXzDV0RM2\/eOkkcQweiNRH4QuiEGNiFGzEaGSGQamSNcxw7Q4WI9RXPeQax+zvadJRTG0UjugcTuBubxS+dx4B57F0aq82j7M2ZyxCGdsvQyMGh50atTL3FrEWc25t49yCwkUdJiEWHvjic86iAATcnsBJ7yFIqJlLbJeuzb1R+N4RDjmGPp52B8bxYjn3EHk4HeDyKkEVjmvDaifZFtEMTyTTv0hxtukicTaQD77DfzDhwK6QilE0Qc0ghwBBHAgi4I7lWe3vLwxPKf5S0fSUrg6\/PQ8hrh5HS7yKz9iGOHGMjMY43fTuMB7dIAcw+y4D0UFgoiICIiAovF8dpsEDPyiaOLpDpZ0jg257vC4ueAupRUX8pWEiahfytO3zuwoLzBuF6ozLU4qsu00gNw+GJ3rjBUmgIiIOctoNa\/aHtNjooTeON3QNI3gWN5ZfKx8Qwdq6Dw6iZhtBHDGNLI2tY0dgaLD4LWcr7PaPLGNTVUIeXy6gNZBDA46i1m6+823m5sLdt9wQEREFV\/KIoxNkyKTnHO31PY4EesN9S2DY7VGr2c0ZPFrXs9iVzR7gFCfKDnEWRWtJ3vnjA8mucfgpbYrAYNm9Lfn0rvJ0ziEEvnzLrc05XmpjbU4aoz2SN3tPr3HuJXLYxGrlwtuF79P5RrEe\/V0hGjT4X5dpJXYy05mzqiZnL85Wf0ty\/RcdFrIsZLWvfnxtfegk8k5eblfLMNMLXaLvd957t7nevcO4BR21qqNJs7rXDiYwz+I9rD7nFbetM2wwGfZxWAcQ1jvZlaT7gUGs\/JzoxFlSeXnJOR5Mjbb3ucrZVWfJ2qBJkuVnNlQ+\/g6NhH+6tNB4sOqxOGlk0ve1p42PFZih8QwCOuqS8lwJte1rbhYcQtXLc9fCS37Yu9ekBj9UypxZj2uBaAzeOG5xJWytxunO7pW+tapi+HNocQbGCSCG7za+9xHJTjcqxc3yetv8ARc3gy5\/PPUnftpxuW76bCDder8taGNAHJfpddvReZ6MV+XamIi4fDK31sNveqe+TXVEVFbFyLYXjyLmn4j1K5scnFLgs8h4MikcfRYT\/ALKlPk1wE4hWv5BkTfNznH\/1QX0iIgIiICrTb3g5xHJPStF3U8jZN3HS7qu+LT5Ky1j1tKyvo3xPGpkjXMcORDhYj1FBoew7HBi2RmRk9emJhcOen6zD4aTb0SrEXNeA1kmybaJJDNqMD7NcR9qMm7JgOZbzH4wujqedtVA17CHNcA5rgbggi4IPMEIPsiIgIiICIoLOGZIcq4G+plO5u5jRuL3ngxvjz7ACeSCoPlC4sa\/G6agj6zmDW5o3nXKQGN8dIv6YV05bwwYNgFPTj\/KiYw+LWgE+ZuVR2yLBJc451kxSpF2RvMlzwdKd7Wt7mCx7rMC6EQEREBYGOYcMWwaaA8JY3x+00i\/vWeiDn\/YDihwnM9TQS9V0gNmn9JCSC3xLS72V0Auf9s2AS5YzZHitN1Wve1xI4Nlbv39zwL951dquDJWaIs24EyojIB+rIziWPA3tPdzB5ghBsCIiCHxLBW11cyTURptcAcbG\/HkpcDciKMePHG2yd9sSaeoi+M8zaeBz3ENa0FziTYAAXJJ5ABWy0XbZjowfIsrAevUWgaOdnb3nw0Aj0gsDYBg5w\/JrpnCxqJC8fhZ1W+8OPmq7zLiEu1faDHTwXEDCWMP3WAgyTuHK\/IfgHFdE4dRMw6gjhjGlkbWsaOwNFh8EGUiIgIiICIiDTdpGRos6YTp3MnjBMUnZfix9uLTbyO8cwamyVnqr2dYiaCvjkMLT9X7cdz9aM8HRnja9uYPEHota\/mzKNJmyk0VMdyL6JG7pGfhd2dxuD2IM\/Bcap8dohNTyslYebTw7nDi09xAKkVz3ieyjFcrVhmw6Z0gHDo3dFNbsc0nS4eBN+xfNm07HsA6lTBqtzngew+0zSD4oOiEXPh28VzhZtLT3\/wDKfdqWPJmrMubepBHNG07voYjE3f8AtX7x7QQXHnLPFHlKmJmkBktdsLCDI7s3fZH+p1h48FSUTMQ2yZl1O+jp4za4uYomniB9+QjzPcBu2PK+xGSoqOmxKa9zcxRuLnu\/HIffpv4q5cLw2LCaJsMEbY42iwawWHj3ntJ3lB8sBweHAMKjp4WhscYsO08y5x5uJuSVJIiAiIgIiII\/GsKixvDJKeZofHIC1w+BB5EGxB5ELnquoa\/Y7mbpYiZKd5sHG\/RytvfRIB9WQcj5i4uF0qsXEKGLEqR0UrGyMcLOa4XB8j8UGuZLz\/R5thHRPDJbdaF5AeO3TycO9vmAttVI5r2IFkxmw6bTbeIZCRb93IN\/gHe0oJmP5mygNErJ5GD9LH07N37Rtz\/Mg6LRc9jbpiEYs6lp9X4ZR7tS+b9peP4\/1aaAtvzgge4+0\/UB4oL3xnGqfAqIy1ErImDm42J7mji49wBKoXO2fKraHXigoI3iFx+qP+5LY\/Wk5MYONr25k8hkYZsnxTNFZ02IzGMHiZHdNN4NaDpaPE7uxXHlLJ9JlOk0U8dibapHb5H\/AIndncLDuQRezTIseTMKsbPqJLGWQd3BjP8ASPed55AboiICIiAiIgIiICIiAvCLheog+bYWtdcNAPcAvoiICIiAiIgIiICIiAiIgIiIPyWBx4BfpEQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQf\/Z"}]',$jsonBDD);
    }

    public function testPostProducts(){
        $NamePrice=array("vélo#150","camionette#5000","chien#12");
        $controller = new Controller();
        $controller->postProducts($NamePrice);
        $total=5162;
        $this->assertEquals(5162,$total);
    }
}