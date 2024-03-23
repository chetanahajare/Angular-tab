import { Routes } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { StateComponent } from './state/state.component';
import { CityComponent } from './city/city.component';
import { LoginComponent } from './login/login.component';
import { CompaniesComponent } from './companies/companies.component';
import { DistributorsComponent } from './distributors/distributors.component';
import { FeedComponent } from './feed/feed.component';
import { ProductsComponent } from './products/products.component';
import { TimerComponent } from './timer/timer.component';
import { UsersComponent } from './users/users.component';
import { FeedbackComponent } from './feedback/feedback.component';
import { NotificationComponent } from './notification/notification.component';


export const routes: Routes = [
  { path: '', redirectTo: 'home', pathMatch: 'full' },
  { path: 'home', component: HomeComponent },
  { path: 'feedback', component: FeedbackComponent },
  { path: 'notification', component: NotificationComponent },
  { path: 'login', component: LoginComponent },
  { path: 'state', component: StateComponent },
  { path: 'city', component: CityComponent },
  { path: 'companies', component: CompaniesComponent },
  { path: 'distributors', component: DistributorsComponent },
  { path: 'feed', component: FeedComponent },
  { path: 'products', component: ProductsComponent },
  { path: 'timer', component: TimerComponent },
  { path: 'users', component: UsersComponent }
];
