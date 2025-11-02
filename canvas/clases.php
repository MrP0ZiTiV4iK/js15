<?php
        class Math {
            private float $PI = 3.14;

            function getPI(): float {
                return $this->PI;
            }
        }

        class Point {
            public int $x;
            public int $y;

            public function getX(): int {
                return $this->x;
            }

            public function getY() {
                return $this->y;
            }

            public function setX(int $x) {
                if(0 <= $x) {
                    $this-> x = $x;
                }
            }

            public function move( int $dx, int $dy) {
                $this->x = $dx;
                $this->y = $dy;
            }
            
            function __construct(int $x, int $y) {
                $this->x = $x;
                $this->y = $y;
            }
        }

        class Line {
            public Point $p1;

            public Point $p2;

            public int $weight;

            public string $color;
        

        function __construct(Point $p1, Point $p2, int $weight = 2, $color = 'black') {
            $this->p1 = $p1;
            $this->p2 = $p2;
            $this->weight = $weight;
            $this->color = $color;
        }
}
         class Canvas {
            public array $lines;

            function __construct(array $lines = []) {
                $this->lines = $lines;
        }
    }

?>