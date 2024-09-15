<?php
    class Employee {
        private $name, $position, $salary;

        public function __construct(string $name, string $position, float $salary){
            $this->name=$name;
            $this->position=$position;
            $this->setSalary($salary);
        }

        //getter employee name
        public function getName(): string{
            return $this->name;
        }

        //setter employee name
        public function setName(): string{
            $this->name=$name;
        }
        //getter empoloyee position
        public function getPosition(): string{
            return $this->position;
        }

        //setter employee position
        public function setPosition(): string{
            $this->position=$position;
        }

        //getter empoloyee salary
        public function getSalary(): float{
            return $this->salary;
        }

        //setter employee salary
        public function setSalary(float $salary): void{
            if ($salary>=0){
                $this->salary=$salary;
            }
            else {
                echo("Salary can't be nagative");
            }
        }

        public function salaryIncrement(float $percentage): void{
            if($percentage > 0){
                $increment_amount=$this->salary*($percentage/100);
                $this->salary +=$increment_amount;
            }
            else{
                echo ("Increment percentage must be more than 0");
            }
        }

    }


$employee=new Employee("Rajib", "jr developer", 15000);

//employee name and position
echo "Name: " . $employee->getName(). "<br>";
echo "Position: " . $employee->getPosition() . "<br>";

// Access employee salary (using getter)
echo "Salary: $" . $employee->getSalary() . "<br>";

//Increment salary for this employee
$employee->salaryIncrement(40);
echo "New salary: ". $employee->getSalary()."<br>";
    
?>