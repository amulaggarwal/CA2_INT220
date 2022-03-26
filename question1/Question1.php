<html>

<body>
    <?php
    class CA
    {
        public $maxMarksCA = 30;
        public $ca1Marks = 23;
        public $ca2Marks = 20;
    }

    class FinalExam extends CA
    {
        public $finalPaperMarks, $maxMarksFinal = 100;

        function __construct($marks)
        {
            $this->finalPaperMarks = $marks;
        }

        function totalMarks()
        {
            $this->total = $this->ca1Marks + $this->ca2Marks + $this->finalPaperMarks;
            echo "Marks obtained are $this->total <br>";
            $maxMarks = $this->maxMarksCA + $this->maxMarksCA + $this->maxMarksFinal;
            echo "Total Marks are $maxMarks <br>";
        }
    }

    $obj = new FinalExam(90);
    $obj->totalMarks();
    ?>
</body>

</html>