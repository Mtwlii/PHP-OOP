 <?php

    trait MyFeature1
    {
        function feature()
        {
            echo 'This Is Feature Number One' . '<br>';
        }
    }
    trait MyFeature2
    {
        function feature()
        {
            echo 'This Is Feature Number Two' . '<br>';
        }
    }

    class Iphone
    {
        use MyFeature1, MyFeature2 {
            //[Trait Name] :: [Method Name] [Keyword as] [New Name]
            MyFeature2::feature as Osamafeat;
            //[Trait Name] :: [Method Name] [Keyword insteadof] [Other Method Name]
            MyFeature1::feature insteadof MyFeature2;
        }
    }

    $iphone = new Iphone();
    $iphone->feature();
    $iphone->Osamafeat();

    echo '<pre>';
    print_r($iphone);
    echo '</pre>';
