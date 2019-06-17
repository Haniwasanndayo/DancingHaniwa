import RPi.GPIO as GPIO
import time
GPIO.setmode(GPIO.BCM)


gp_out = 2
GPIO.setup(gp_out, GPIO.OUT)
body = GPIO.PWM(gp_out, 50)


body.start(0.0)
# セットアップ終了
bot = 2.5
mid = 7.2
top = 12.0
#slp=0.5
slp= 0.25
#U2.5 M7.2 T12.0 Sleep=0.5

body.ChangeDutyCycle(bot)
time.sleep(0.5)
body.ChangeDutyCycle(top)
time.sleep(0.5)
body.ChangeDutyCycle(bot)
time.sleep(0.5)
body.ChangeDutyCycle(top)
time.sleep(0.5)

GPIO.cleanup()
