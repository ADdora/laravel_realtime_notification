<template>
    <div>
        <li class="nav-item dropdown">
            <button class="btn btn-default btn-lg btn-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:15px;">
                <i class="fa fa-bell"></i>
            </button>
            <span class="badge badge-notify">{{ this.notificationCounter }}</span>

            <ul class="dropdown-menu notify-drop p-0" aria-labelledby="dropdownMenuButton" style="background-color: #EBEFF1; overflow: auto">
                <li class="p-2 text-light bg-primary">
                    <b>Notifications</b>
                </li>
                <li class="p-2 pl-2 notification-row" style="line-height: 1.25" v-for="notification in notifications">
                    <span class="help-block text-muted" style="font-size: 1rem;"><b>{{ notification.title }}</b></span><br>
                    <span class="help-block text-muted" style="font-size: 0.75rem;">{{ notification.created_at }}</span>
                </li>
            </ul>
        </li>
    </div>
</template>

<script>
    export default {
        name: 'NotificationComponent',
        props: ['user_id'],
        data() {
            return {
                notifications: [],
                notificationCounter: 0,
            }
        },
        mounted() {
            Echo.private(`notification.${this.user_id}`)
                .listen('DatabaseNotification', (e) => {
                    this.notifications.unshift(e.notification);
                    this.notificationCounter = this.notifications.length;
                });
        }
    }
</script>

<style scoped>
    .badge-notify{
        background:red;
        position:relative;
        top: -10px;
        left: -28px;
    }
    .notify-drop {
        min-width: 280px;
        min-height: 280px;
        max-height: 280px;
    }
</style>
