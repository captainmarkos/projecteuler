
# /*\
# | | Project #16
# | |
# | | 2^15 = 32768 and the sum of its digits is 3 + 2 + 7 + 6 + 8 = 26.
# | |
# | | What is the sum of the digits of the number 2^1000?
# \*/

def factorial(n)
  (1..n).reduce(:*) || 1
end

n = 100

sum_of_digits = factorial(n).to_s.split('').inject(0) { |sum, i| sum + i.to_i }

puts "#{n}! = #{factorial(n)}"
puts "Sum of digits: #{sum_of_digits}"
