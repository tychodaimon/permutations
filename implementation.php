public function sampling($chars, $size, $combinations = [])
    {
        # if it's the first iteration, the first set of permutations is the same as the set of characters
        if (empty($combinations)) {
            $combinations = $chars;
        }

        # we're done if we're at size 1
        if ($size == 1) {
            return $combinations;
        }

        # initialise array to put new values in
        $new_combinations = [];

        # loop through existing combinations and character set to create strings
        foreach ($combinations as $combination) {
            foreach ($chars as $char) {
                if (strpos($combination, $char) === false) {
                    $new_combinations[] = $combination . $char;
                }
            }
        }

        # call same function again for the next iteration
        return $this->sampling($chars, $size - 1, $new_combinations);
    }

$example = $this->sampling(['A','B','C','D','E'], 4);
var_dump(count($example));
print_r($example);
die;
