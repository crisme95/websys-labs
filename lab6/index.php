<?php

abstract class Operation
{
  protected $operand_1;
  protected $operand_2;
  public function __construct($o1, $o2)
  {
    if (empty($o1) && empty($o2)) {
      throw new Exception('Please fill in input boxes.');
    }

    // Assign passed values to member variables
    $this->operand_1 = $o1;
    $this->operand_2 = $o2;
  }
  public abstract function operate();
  public abstract function getEquation();
}

interface Instructions
{
  public function how2Use();
}

// Addition subclass inherits from Operation
class Addition extends Operation implements Instructions
{
  public function how2Use()
  {
    echo "Enter two numbers in the input boxes.\n";
  }
  public function operate()
  {
    // Make sure we're working with numbers...
    if (!is_numeric($this->operand_1) || !is_numeric($this->operand_2)) {
      throw new Exception('Non-numeric operand.');
    }

    return $this->operand_1 + $this->operand_2;
  }
  public function getEquation()
  {
    return $this->operand_1 . ' + ' . $this->operand_2 . ' = ' . $this->operate();
  }
}

// Subtraction subclass inherits from Operation
class Subtraction extends Operation implements Instructions
{

  public function how2Use()
  {
    echo "Enter two numbers in the input boxes.\n";
  }
  public function operate()
  {
    // Make sure we're working with numbers...
    if (!is_numeric($this->operand_1) || !is_numeric($this->operand_2)) {
      throw new Exception('Non-numeric operand.');
    }

    return $this->operand_1 - $this->operand_2;
  }
  public function getEquation()
  {
    return $this->operand_1 . ' - ' . $this->operand_2 . ' = ' . $this->operate();
  }
}

// Multiplication subclass inherits from Operation
class Multiplication extends Operation implements Instructions
{
  public function how2Use()
  {
    echo "Enter two numbers in the input boxes.\n";
  }
  public function operate()
  {
    // Make sure we're working with numbers...
    if (!is_numeric($this->operand_1) || !is_numeric($this->operand_2)) {
      throw new Exception('Non-numeric operand.');
    }

    return $this->operand_1 * $this->operand_2;
  }
  public function getEquation()
  {
    return $this->operand_1 . ' * ' . $this->operand_2 . ' = ' . $this->operate();
  }
}

// Division subclass inherits from Operation
class Division extends Operation implements Instructions
{
  public function how2Use()
  {
    echo "Enter two numbers in the input boxes.\n";
  }
  public function operate()
  {
    // Make sure we're working with numbers...
    if (!is_numeric($this->operand_1) || !is_numeric($this->operand_2)) {
      throw new Exception('Non-numeric operand.');
    }

    return $this->operand_1 / $this->operand_2;
  }
  public function getEquation()
  {
    return $this->operand_1 . ' / ' . $this->operand_2 . ' = ' . $this->operate();
  }
}

class Exponent extends Operation implements Instructions
{
  public function how2Use()
  {
    echo "Enter two numbers in the input boxes.\n";
  }
  public function operate()
  {
    // Make sure we're working with numbers...
    if (!is_numeric($this->operand_1) || !is_numeric($this->operand_2)) {
      throw new Exception('Non-numeric operand.');
    }

    return pow($this->operand_1, $this->operand_2);
  }
  public function getEquation()
  {
    return $this->operand_1 . ' ^ ' . $this->operand_2 . ' = ' . $this->operate();
  }
}

class Sin extends Operation implements Instructions
{
  public function how2Use()
  {
    echo "For trig, enter number in first box and 'rad' or 'deg' in second box.\n";
  }
  public function operate()
  {
    // Make sure we're working with numbers and mode was specified
    if (!is_numeric($this->operand_1)) {
      throw new Exception('Non-numeric operand.');
    } else if ($this->operand_2 != 'rad' && $this->operand_2 != 'deg') {
      throw new Exception('Radian or degree mode not specified.');
    }

    if ($this->operand_2 == 'rad') {
      return sin($this->operand_1);
    } else if ($this->operand_2 == 'deg') {
      return sin(deg2rad($this->operand_1));
    }
  }
  public function getEquation()
  {
    return 'sin(' . $this->operand_1 . ') = ' . $this->operate();
  }
}

class Cos extends Operation implements Instructions
{
  public function how2Use()
  {
    echo "For trig, enter number in first box and 'rad' or 'deg' in second box.\n";
  }
  public function operate()
  {
    // Make sure we're working with numbers and mode was specified
    if (!is_numeric($this->operand_1)) {
      throw new Exception('Non-numeric operand.');
    } else if ($this->operand_2 != 'rad' && $this->operand_2 != 'deg') {
      throw new Exception('Radian or degree mode not specified.');
    }

    if ($this->operand_2 == 'rad') {
      return cos($this->operand_1);
    } else if ($this->operand_2 == 'deg') {
      return cos(deg2rad($this->operand_1));
    }
  }
  public function getEquation()
  {
    return 'cos(' . $this->operand_1 . ') = ' . $this->operate();
  }
}

class Tan extends Operation implements Instructions
{
  public function how2Use()
  {
    echo "For trig, enter number in first box and 'rad' or 'deg' in second box.\n";
  }
  public function operate()
  {
    // Make sure we're working with numbers and mode was specified
    if (!is_numeric($this->operand_1)) {
      throw new Exception('Non-numeric operand.');
    } else if ($this->operand_2 != 'rad' && $this->operand_2 != 'deg') {
      throw new Exception('Radian or degree mode not specified.');
    }

    if ($this->operand_2 == 'rad') {
      return tan($this->operand_1);
    } else if ($this->operand_2 == 'deg') {
      return tan(deg2rad($this->operand_1));
    }
  }
  public function getEquation()
  {
    return 'tan(' . $this->operand_1 . ') = ' . $this->operate();
  }
}

class Sqrt extends Operation implements Instructions
{
  public function how2Use()
  {
    echo "Only enter into the first input box.\n";
  }
  public function operate()
  {
    // Make sure we're working with numbers 
    if (!is_numeric($this->operand_1)) {
      throw new Exception('Non-numeric operand.');
    }
    return sqrt($this->operand_1);
  }
  public function getEquation()
  {
    return "&radic;" . $this->operand_1 . ' = ' . $this->operate();
  }
}

class Squared extends Operation implements Instructions
{
  public function how2Use()
  {
    echo "Only enter into the first input box.\n";
  }
  public function operate()
  {
    // Make sure we're working with numbers
    if (!is_numeric($this->operand_1)) {
      throw new Exception('Non-numeric operand.');
    }
    return pow($this->operand_1, 2);
  }
  public function getEquation()
  {
    return $this->operand_1 . ' ^ 2 = ' . $this->operate();
  }
}

class SciNot extends Operation implements Instructions
{
  public function how2Use()
  {
    echo "Enter two numbers in the input boxes.\n";
  }
  public function operate()
  {
    return $this->operand_1 * pow(10, $this->operand_2);
  }
  public function getEquation()
  {
    return $this->operand_1 . ' * 10^' . $this->operand_2 . ' = ' . $this->operate();
  }
}

class Log extends Operation implements Instructions
{
  public function how2Use()
  {
    echo "Only enter into the first input box.\n";
  }
  public function operate()
  {
    // Make sure we're working with numbers 
    if (!is_numeric($this->operand_1)) {
      throw new Exception('Non-numeric operand.');
    }
    return log10($this->operand_1);
  }
  public function getEquation()
  {
    return 'log10(' . $this->operand_1 . ') = ' . $this->operate();
  }
}

class Ln extends Operation implements Instructions
{
  public function how2Use()
  {
    echo "Only enter into the first input box.\n";
  }
  public function operate()
  {
    // Make sure we're working with numbers 
    if (!is_numeric($this->operand_1)) {
      throw new Exception('Non-numeric operand.');
    }
    return log($this->operand_1);
  }
  public function getEquation()
  {
    return 'ln(' . $this->operand_1 . ') = ' . $this->operate();
  }
}

class eExp extends Operation implements Instructions
{
  public function how2Use()
  {
    echo "Only enter into the first input box.\n";
  }
  public function operate()
  {
    // Make sure we're working with numbers 
    if (!is_numeric($this->operand_1)) {
      throw new Exception('Non-numeric operand.');
    }
    return exp($this->operand_1);
  }
  public function getEquation()
  {
    return 'e ^ ' . $this->operand_1 . ' = ' . $this->operate();
  }
}

// Some debugs - uncomment these to see what is happening...
// echo '$_POST print_r=>', print_r($_POST);
// echo "<br>", '$_POST vardump=>', var_dump($_POST);
// echo '<br/>$_POST is ', (isset($_POST) ? 'set' : 'NOT set'), "<br/>";
// echo "<br/>---";


// Check to make sure that POST was received 
// upon initial load, the page will be sent back via the initial GET at which time
// the $_POST array will not have values - trying to access it will give undefined message

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $o1 = $_POST['op1'];
  $o2 = $_POST['op2'];
}
$err = array();


// Instantiate an object for each operation based on the values returned on the form
// For example, check to make sure that $_POST is set and then check its value and 
// instantiate its object
// 
// The Add is done below.  Go ahead and finish the remaining functions.  
// Then tell me if there is a way to do this without the ifs
// We might cover such a way on Tuesday... 

try {
  if (isset($_POST['add']) && $_POST['add'] == 'Add') {
    $op = new Addition($o1, $o2);
  } elseif (isset($_POST['sub']) && $_POST['sub'] == 'Subtract') {
    $op = new Subtraction($o1, $o2);
  } elseif (isset($_POST['mult']) && $_POST['mult'] == 'Multiply') {
    $op = new Multiplication($o1, $o2);
  } elseif (isset($_POST['divi']) && $_POST['divi'] == 'Divide') {
    $op = new Division($o1, $o2);
  } elseif (isset($_POST['exp']) && $_POST['exp'] == 'X^Y') {
    $op = new Exponent($o1, $o2);
  } elseif (isset($_POST['sin']) && $_POST['sin'] == 'sin(x)') {
    $op = new Sin($o1, $o2);
  } elseif (isset($_POST['cos']) && $_POST['cos'] == 'cos(x)') {
    $op = new Cos($o1, $o2);
  } elseif (isset($_POST['tan']) && $_POST['tan'] == 'tan(x)') {
    $op = new Tan($o1, $o2);
  } elseif (isset($_POST['sqrt']) && $_POST['sqrt'] == 'sqrt(x)') {
    $op = new Sqrt($o1, $o2);
  } elseif (isset($_POST['squared']) && $_POST['squared'] == 'x^2') {
    $op = new Squared($o1, $o2);
  } elseif (isset($_POST['sciNot']) && $_POST['sciNot'] == '10^x') {
    $op = new SciNot($o1, $o2);
  } elseif (isset($_POST['log10']) && $_POST['log10'] == 'log10(x)') {
    $op = new Log($o1, $o2);
  } elseif (isset($_POST['log']) && $_POST['log'] == 'ln(x)') {
    $op = new Ln($o1, $o2);
  } elseif (isset($_POST['eExp']) && $_POST['eExp'] == 'e^x') {
    $op = new eExp($o1, $o2);
  }
} catch (Exception $e) {
  $err[] = $e->getMessage();
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>PHP Calculator</title>
  <link href="assets/style.css" rel="stylesheet">
</head>

<body>
<h1>Cristian's PHP Calculator</h1>

  <form method="post" action="index.php">
    <table class="calculator">
      <tr>
        <td><input class="displaybox" type="text" name="op1" id="name" value="" /></td>
        <td></td>
        <td><input class="displaybox" type="text" name="op2" id="name" value="" /></td>
      </tr>
      <!-- Only one of these will be set with their respective value at a time -->
      <tr>
        <td><input class="button" type="submit" name="add" value="Add" /></td>
        <td><input class="button" type="submit" name="sub" value="Subtract" /></td>
        <td><input class="button" type="submit" name="mult" value="Multiply" /></td>
        <td><input class="button" type="submit" name="divi" value="Divide" /></td>
      </tr>
      <tr>
        <td><input class="button" type="submit" name="exp" value="X^Y" /></td>
        <td><input class="button" type="submit" name="sin" value="sin(x)" /></td>
        <td><input class="button" type="submit" name="cos" value="cos(x)" /></td>
        <td><input class="button" type="submit" name="tan" value="tan(x)" /></td>
      </tr>
      <tr>
        <td><input class="button" type="submit" name="sqrt" value="sqrt(x)" /></td>
        <td><input class="button" type="submit" name="squared" value="x^2" /></td>
        <td><input class="button" type="submit" name="log10" value="log10(x)" /></td>
        <td><input class="button" type="submit" name="log" value="ln(x)" /></td>
        <td><input class="button" type="submit" name="eExp" value="e^x" /></td>
      </tr>
      <!-- Results of the calculations are output here, at the bottom of the calculator -->
      <tr>
        <td>
          <pre id="result">
  <?php
  if (isset($op)) {
    try {
      $op->how2Use();
      echo $op->getEquation();
    } catch (Exception $e) {
      $err[] = $e->getMessage();
    }
  }

  foreach ($err as $error) {
    echo $error . "\n";
  }
  ?>
  </pre>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>