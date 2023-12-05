import winsound
import time

# Define the frequency and duration of the sound
frequency = 2500  # Hz
duration = 1000  # ms

# Define the number of times to repeat the sound
num_repeats = 3

# Play the sound multiple times
for i in range(num_repeats):
    winsound.Beep(frequency, duration)
    time.sleep(0.5)  # Wait for half a second between each sound
