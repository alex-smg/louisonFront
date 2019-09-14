import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/Home.vue'
import Work from '@/components/work/Work.vue'
import WorkSelect from '@/components/work/WorkSelect.vue'
import Contact from '@/components/contact/Contact.vue'

Vue.use(Router);

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/work',
      name: 'Work',
      component: Work
    },
    {
      path: '/work/:id',
      name: 'WorkSelect',
      component: WorkSelect
    },
    {
      path: '/contact',
      name: 'contact',
      component: Contact
    }
  ]
})
