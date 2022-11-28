<script>
const date = new Date()
const audioAlarm = new Audio('../public/alarm.wav')
export default {
  emits: ['response'],
  created() {
    this.$emit('response', '13 - Emits')
  },
  data() {
    return {
      dateTime: {
        hours: date.getHours(),
        minutes: date.getMinutes(),
        seconds: date.getSeconds()
      },
      timer: undefined,
      alarm: {
          hours: null,
          minutes: null
      },
      alarming: false,
      showAlarm: false,
      allowSound: true
    }
  },
  methods: {
      setAlarm() {
        this.alarm = {
          hours:  this.$refs.hours.value,
          minutes: this.$refs.minutes.value,
        }
        this.alarming = true;
      },
      setDateTime() {
        const date = new Date()
        this.dateTime = {
            hours: date.getHours(),
            minutes: date.getMinutes(),
            seconds: date.getSeconds(),
        }
        if(this.dateTime.hours   == this.alarm.hours &&
           this.dateTime.minutes == this.alarm.minutes) {
            if (this.alarming) {
                this.playSound()
                this.showAlarm = true
            }
        }
      },
      playSound() {
        if (this.allowSound) {
            audioAlarm.play()
            audioAlarm.loop = true
            this.allowSound = false
        }
      },
      resetAlarm() {
          audioAlarm.pause();
          audioAlarm.currentTime = 0;
          this.alarming = false
          this.showAlarm = false
          this.allowSound = true
      }
  },
  beforeMount() {
    this.timer = setInterval(this.setDateTime, 1000);
  },
  beforeUnmount() {
    clearInterval(this.timer);
  },
}
</script>

<template>
  <h2 class="text-center font-medium text-2xl">Set Alarm</h2>
  <h3 class="text-center text-4xl font-bold my-4 text-[#41b883]">
      {{ dateTime.hours }}:{{ dateTime.minutes }}:{{ dateTime.seconds }}
  </h3>
  <div class="flex justify-center items-center mb-4">
    <select ref="hours">
        <option value="" selected disabled>Hours</option>
        <option v-for="i in 24">{{ i }}</option>
    </select>
    :
    <select ref="minutes">
        <option value="" selected disabled>Minutes</option>
        <option v-for="i in 60">{{ i }}</option>
    </select>
  </div>
  <button v-if="!alarming" @click="setAlarm()" class="bg-[#34495e] text-white mx-auto py-2 px-10 flex rounded-full capitalize hover:scale-110 transition duration-200 mt-2">Set Alarm</button>
  <button v-else @click="resetAlarm()" class="bg-[#c34d46] text-white mx-auto py-2 px-10 flex rounded-full capitalize hover:scale-110 transition duration-200 mt-2">Reset Alarm</button>
  <h4 v-if="showAlarm" class="bg-red-700 text-white my-8 w-6/12 p-4 mx-auto text-center font-medium animate-ping">Alarming</h4>

</template>