<h1 style="height: 120px; line-height:120px;">About Trash Pandas <img src="/img/r4.jpg" alt="Trash Panda logo" style="height:120px; float: right;"></h1>

<div class="bs-example">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-one">Fun Facts</a>
                </h4>
            </div>
            <div id="collapse-one" class="panel-collapse collapse in">
                <div class="panel-body">
                    <style>
                        #collapse-one img {
                            margin-left: 20px;
                            margin-bottom: 30px;
                        }
                        #collapse-three p:nth-child(4) {
                            clear: left;
                        }
                        #collapse-three p:nth-child(2) {
                            clear: right;
                        }
                    </style>
                    <img src="/img/r2.jpg" alt="Raccoon close-up" style="margin-bottom: 20px;">
                    <p>
                        1. The raccoon’s scientific name, Procyon lotor, means “washer dog” although it is a closer relative to the bear family.<br>
                        2. Raccoons have a large array of vocalizations. Scientists have determined that they can make over 51 different sounds! They purr, whistle, growl, hiss, scream and even whinny.<br>
                        3. Raccoons have been kept as pets (President Coolidge and his wife had one named Rebecca), and while young, seem happy to be in human company. As they mature, especially during mating season, they can become increasingly destructive and aggressive.<br>
                        4. A raccoon’s hands are so nimble they can unlace a shoe, unlatch a cage and deftly retrieve coins as thin as dimes from your shirt pocket.<br>
                        5. In spring, female raccoons give birth to three or four young. The baby raccoon’s eyes do not open until 20 days or so after birth. It won’t have rings on its tail, or a mask around its eyes, until it’s older. Baby raccoons stay in the den for eight to ten weeks. The mother raccoon is very protective of her babies—she won’t even let the father near them.<br>
                        6. On the mammal IQ scale raccoons rank higher than cats and just below monkeys.<br>
                        7. Christopher Columbus is the first individual we know of to have written about the species.<br>
                        8. The raccoon has the ability to rotate their hind feet a full 180 degrees to allow for their ability to climb down from trees head first.<br>
                        9. The word raccoon, derived from the Algonquin Indian word “arakun” means “he scratches with hands”.<br>
                        10. Raccoons are more likely to be killed by an automobile than by another predator.<br>
                        10. A raccoon can run at speeds of up to 15 miles per hour.
                    </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-two">Which raccoon do you prefer?</a>
                </h4>
            </div>
            <div id="collapse-two" class="panel-collapse collapse">
                <div class="panel-body">
                    <img src="/img/r5.jpg" alt="Raccoon yelling">
                    <img src="/img/r6.jpg" alt="Raccoon staring">
                    <div class="choices" style="clear: both">
                        <ul>
                            <li><label><input type="radio" name="prefered-raccoon" value="yelling" /> The one yellnig</label></li>
                            <li><label><input type="radio" name="preferred-raccoon" value="staring" /> The one staring</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-three">Did you know...</a>
                </h4>
            </div>
            <div id="collapse-three" class="panel-collapse collapse">
                <div class="panel-body">
                    <img class="left" src="/img/r1.jpg" alt="Raccoon tongue">
                    <p>Bandit-masked raccoons are a familiar sight just about everywhere, because they will eat just about anything. These ubiquitous mammals are found in forests, marshes, prairies, and even in cities. They are adaptable and use their dexterous front paws and long fingers to find and feast on a wide variety of fare.<br>Raccoons in the northern parts of their range gorge themselves in spring and summer to store up body fat. They then spend much of the winter asleep in a den. There are six other species of raccoons, in addition to the familiar northern (North American) raccoon. Most other species live on tropical islands.</p>
                    <img class="right" src="/img/r3.jpg" alt="Raccoon arms">
                    <p>In the natural world, raccoons snare a lot of their meals in the water. These nocturnal foragers use lightning-quick paws to grab crayfish, frogs, and other aquatic creatures. On land, they pluck mice and insects from their hiding places and raid nests for tasty eggs.</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('input[value="staring"]').on('click', function() {
                $('.panel-default:nth-child(3) a').trigger('click');
            });
        });
    </script>
</div>