<?php include("userheader.php");?>
<hr>
<script>
//When Page Load Browser Back Button is Disabled 
(function (global) { 

    if(typeof (global) === "undefined") {
        throw new Error("window is undefined");
    }

    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";

        // making sure we have the fruit available for juice (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };

    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };

    global.onload = function () {            
        noBackPlease();

        // disables backspace on page except on input fields and textarea..
        document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };          
    }
})(window);
</script>

<?php include("userslide.php") 
?>
<div id="slider1_container" style="position: relative; top: -450px; right: -850px; width: 495px;
        height: 50px; ">
		
<h3><font color="gold"><b>An Overview of Holistic Education</b></font></h3>
<hr>

<P>As a part of the process of societal evolution, human has been conditioned to be more observant to bodily experiences and empirical things. Thereby, we have gained a significant understanding of the material world and are less responsive to things that are immaterial and invaluable.

Unfortunately, our education system could not remain impervious from this unidimensional approach. The focus has been on developing the intellectual potentials of student learners, thereby ignoring the emotional, social, physical, artistic, creative and spiritual potentials.

Holistic education is based on the premise that each person finds identity, meaning, and purpose in life through connections to the community, to the natural world, and to spiritual values such as compassion and peace.
</P>
</div>
<div id="slider1_container" style="position: relative;">
<p>Uka Tarsadia University seeks to engage students in the teaching-learning
 process and encourage personal and social responsibility. It is progressively
 working towards building and encouraging a system wherein the students learn 
 about themselves, relationships, about resilience and aesthetics. These involve 
 learning self respect and self esteem; social and emotional literacy; the art of 
 overcoming difficulties, facing challenges; and seeing the beauty around them and learn to have awe in life.</p>
 </div>
 <hr>
 <h3><font color="gold"><b>Mission</b></font></h3>
 <p>&nbsp;&nbsp;&nbsp;To serve the society by creation, augmentation, dissemination and perpetuation of knowledge through highest level of learning and research. </p>
 
 <hr>
 <h3><font color="gold"><b>Vision</b></font></h3>
 <p>&nbsp;&nbsp;&nbsp;To become a preeminent education hub that is responsive to the changing needs of a knowledge-based global society.</p>
 <hr>
 <h3><font color="gold"><b>Vision</b></font></h3>
 <p>
    * To impart holistic education in the context of dynamic global challenges.<br>
    * To mobilize resources which promote acquisition, retention and application of knowledge.<br>
    * To provide a platform for economic development through collaboration with academic institutes and industries.
</p>
<?php include("footer.php")?>