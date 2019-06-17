import RPi.GPIO as GPIO
import time
GPIO.setmode(GPIO.BCM)

gp_out = 4
GPIO.setup(gp_out, GPIO.OUT)
right = GPIO.PWM(gp_out, 50)

gp_out = 3
GPIO.setup(gp_out, GPIO.OUT)
left = GPIO.PWM(gp_out, 50)

gp_out = 2
GPIO.setup(gp_out, GPIO.OUT)
body = GPIO.PWM(gp_out, 50)

gp_out = 17
GPIO.setup(gp_out, GPIO.OUT)
head = GPIO.PWM(gp_out, 50)

right.start(0.0)
left.start(0.0)
body.start(0.0)
head.start(0.0)
# セットアップ終了
bot = 2.5
mid = 7.2
top = 12.0
#slp=0.5
slp= 0.25
#U2.5 M7.2 T12.0 Sleep=0.5

right.ChangeDutyCycle(bot)
left.ChangeDutyCycle(bot)
body.ChangeDutyCycle(mid - 3.5)
time.sleep(slp)
right.ChangeDutyCycle(mid)
left.ChangeDutyCycle(mid)
time.sleep(slp)
right.ChangeDutyCycle(bot)
left.ChangeDutyCycle(bot)
time.sleep(slp)
body.ChangeDutyCycle(mid)

right.ChangeDutyCycle(top)
left.ChangeDutyCycle(top)
time.sleep(slp)
right.ChangeDutyCycle(mid)
left.ChangeDutyCycle(mid)
time.sleep(slp)
body.ChangeDutyCycle(mid - 3.5)
right.ChangeDutyCycle(bot)
left.ChangeDutyCycle(bot)
time.sleep(slp)

right.ChangeDutyCycle(bot)
left.ChangeDutyCycle(top)
time.sleep(slp)
body.ChangeDutyCycle(mid)
right.ChangeDutyCycle(top)
left.ChangeDutyCycle(bot)
time.sleep(slp)
right.ChangeDutyCycle(mid)
left.ChangeDutyCycle(mid)
time.sleep(slp)
body.ChangeDutyCycle(mid - 3.5)

right.ChangeDutyCycle(mid)
left.ChangeDutyCycle(top)
time.sleep(slp)
right.ChangeDutyCycle(top)
left.ChangeDutyCycle(mid)
time.sleep(slp)
right.ChangeDutyCycle(mid)
left.ChangeDutyCycle(top)
time.sleep(slp)
right.ChangeDutyCycle(top)
left.ChangeDutyCycle(mid)
time.sleep(slp)
body.ChangeDutyCycle(mid)

right.ChangeDutyCycle(mid)
left.ChangeDutyCycle(mid)
time.sleep(slp)
right.ChangeDutyCycle(bot)
left.ChangeDutyCycle(bot)
time.sleep(slp)
body.ChangeDutyCycle(mid - 3.5)
right.ChangeDutyCycle(mid)
left.ChangeDutyCycle(mid)
time.sleep(slp)
right.ChangeDutyCycle(bot)
left.ChangeDutyCycle(bot)
time.sleep(slp)
body.ChangeDutyCycle(mid)

GPIO.cleanup()
